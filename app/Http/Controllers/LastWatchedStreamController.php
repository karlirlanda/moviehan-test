<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LastWatchedStream;

class LastWatchedStreamController extends Controller
{
    protected $listener =  [
        'StreamedViewed' => 'lastStreamWatched'
    ];

    public function lastStreamWatched()
    {
        $this->user->last_watched_stream->create([
            'user_id' => auth()->user()->id,
            'stream_id' => $this->streams()->id
        ]);
    }
}
