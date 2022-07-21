<?php

namespace App\Http\Controllers;

use App\Models\Genres;
use App\Models\Videos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminVideoController extends Controller
{
    public function __construct()
    {
        $this->video = new Videos();
    }

    public function index(Request $request)
    {

        $limit = ($request->limit) ? $request->limit : 50;

        $videos = Videos::visibleFor(request()->user())->latest()->paginate($limit)->withQueryString();

        return view('videos.index', compact('videos'));
    }

    public function create()
    {
        $videos = Videos::all();
        $genres = Genres::all();

        return view('admin.admin', compact('videos', 'genres'));
    }

    public function store(Request $request)
    {

        //for validation
        $request->validate([
            'thumbnail' => 'required|file',
            'category_id' => 'required|exists:categories,id',
            'title' => 'required|string|max:255',
            'video_url' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'cast' => 'required|string|max:255',
            'duration' => 'required|string|max:255',
            'is_active' => 'required|boolean',
            'year_released' => 'required|string|max:255',
        ]);

        // print_r($request->all());
        // die;

        //creating a new video
        $video = new Videos();

        $video->category_id = $request->category_id;
        $video->title = $request->title;
        $video->video_url = $request->video_url;
        $video->description = $request->description;
        $video->cast = $request->cast;
        $video->duration = $request->duration;
        $video->is_active = $request->is_active;
        $video->year_released = $request->year_released;


        if ($request->hasFile('thumbnail')) {

            $path = $request->file('thumbnail')->store('thumbnail', ['disk' => 's3']);
            $video->thumbnail = $path;
            // print_r(Storage::disk('s3')->url($path));
            // die;
        }

        $video->save();

        $video->genres()->attach($request->input('genres', []));
        $video->tags()->attach($request->input('tags', []));;

        return $video;
    }

    public function show($id)
    {
        $videos = Videos::find($id);

        if ($videos) {
            return $videos;
        } else {
            return "No videos available";
        }
    }


    public function all()
    {
        $videos = Videos::all();

        return $videos;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // public function edit()
    // {

    //     $videos = Auth::user()->videos()->orderBy('name')->pluck('name', 'id')->prepend('All Videos', '');

    //     return $videos;
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $request->validate([
            'thumbnail' => 'file',
            'category_id' => 'exists:categories,id',
            'title' => 'string|max:255',
            'video_url' => 'string|max:255',
            'description' => 'string|max:255',
            'cast' => 'string|max:255',
            'duration' => 'string|max:255',
            'is_active' => 'boolean',
            'year_released' => 'string|max:255',
        ]);

        $video = Videos::findOrFail($id);

        if ($request->hasFile('thumbnail')) {

            Storage::disk('s3')->delete($video->thumbnail);

            $path = $request->file('thumbnail')->store('thumbnail', ['disk' => 's3']);
            $video->thumbnail = $path;
        }

        $updated = $video->update($request->all());

        if ($updated) {
            return response()->json([
                'success' => 'Video successfully updated'
            ]);
        } else {
            return response()->json([
                'error' => 'failed to update'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $video = Videos::findOrFail($id);
        $path = $video->thumbnail;

        $deleted = Storage::disk('s3')->delete($path);

        if ($deleted) {
            $video->delete();

            return response()->json([
                'message' => 'Video Successfully Deleted'
            ]);
        }
    }


    public function changeStatus(Request $request)
    {
        $video = Videos::find($request->video_id);
        $video->is_active = $request->is_active;
        $video->save();

        return response()->json(['success' => 'Status changed.']);
    }
}
