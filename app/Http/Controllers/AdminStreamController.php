<?php

namespace App\Http\Controllers;

use App\Models\Streams;
use Illuminate\Http\Request;

class AdminStreamController extends Controller
{
    public function index(Request $request)
  {

    $limit = ($request->limit) ? $request->limit : 50;

    $streams = Streams::visibleFor(request()->user())->latest()->paginate($limit)->withQueryString();

    return view('streams.index', compact('streams'));
  }

  public function store(Request $request)
  {
    //for validation
    $request->validate([
      'name' => 'required|string|max:255',
      'description' => 'required|string|max:255',
      'stream_url' => 'required|string|max:255',
      'is_active' => 'required|boolean',
    ]);

    //creating a new stream
    $stream = new Streams();

    $stream->name = $request->name;
    $stream->description = $request->description;
    $stream->stream_url = $request->stream_url;
    $stream->is_active = $request->is_active;

    $stream->save();

    $stream->genres()->attach($request->input('genres', []));

    return $stream;
  }


  public function show($id)
  {
    $stream = Streams::find($id);

    if ($stream) {
      return $stream;
    } else {
      return "No stream available";
    }
  }


  public function all()
  {
    $streams = Streams::all();

    return $streams;
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */

  // public function edit()
  // {

  //   $streams = Auth::user()->streams()->orderBy('name')->pluck('name', 'id')->prepend('All streams', '');

  //   return $streams;
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
      'name' => 'string|max:255',
      'description' => 'string|max:255',
      'stream_url' => 'string|max:255',
      'is_active' => 'boolean',
    ]);

    $stream = Streams::findOrFail($id);

    $updated = $stream->update($request->all());

    if ($updated) {
      return response()->json([
        'success' => 'stream successfully updated'
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
    $stream = Streams::findOrFail($id);
    $deleted = $stream->delete();

    if ($deleted) {
      return response()->json([
        'message' => 'Stream successfully deleted'
      ]);
    }
  }
}
