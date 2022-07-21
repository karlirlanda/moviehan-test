<?php

namespace App\Http\Controllers;

use App\Models\Streams;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

  public function edit()
  {

    $streams = Streams::orderBy('name');

    return $streams;
  }

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

  public function changeStatus(Request $request)
  {

    $stream = Streams::find($request->id);
    $stream->is_active = $request->is_active;
    $stream->save();

    return response()->json(['success' => 'Status changed.']);
  }
}
