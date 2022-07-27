<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminVideoController extends Controller
{

    public function __construct()
    {
        $this->video = new Video();
    }

    public function index(Request $request)
    {
        $limit = ($request->limit) ? $request->limit : 50;
        $videos = Video::visibleFor(request()->user())->latest()->paginate($limit)->withQueryString();

        return view('videos.index', compact('videos'));
    }

    public function create()
    {
        $videos = new Video();
        $genres = Genre::all();
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
        //creating a new video
        $video = new Video();

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
        }

        $video->save();

        //relationship
        $video->genres()->attach($request->input('genres', []));
        $video->tags()->attach($request->input('tags', []));;

        return response()->json(["Success" => " Video uploaded"]);
    }

    public function show($id)
    {
        $videos = Video::find($id);

        if ($videos) {
            return $videos;
        } else {
            return "No videos available";
        }
    }


    public function all()
    {
        $videos = Video::all();

        return $videos;
    }

    public function edit()
    {

        $videos = Video::orderBy('name')->pluck('name', 'id')->prepend('All Videos', '');

        return $videos;
    }

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

        $video = Video::findOrFail($id);

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

    public function destroy($id)
    {
        $video = Video::findOrFail($id);
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
        $video = Video::find($request->id);
        $video->is_active = $request->is_active;
        $video->save();

        return response()->json(['success' => 'Status changed.']);
    }
}