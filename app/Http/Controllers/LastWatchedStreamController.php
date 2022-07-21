<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LastWatchedStream;
use Illuminate\Support\Facades\Auth;

class LastWatchedStreamController extends Controller
{
    protected $listener =  [
        'StreamedViewed' => 'lastStreamWatched'
    ];

    public function __construct()
    {
        $this->user = Auth::user();
    }



    public function lastStreamWatched()
    {
        $this->user->last_watched_stream->create([
            'user_id' => $this->user->id,
            'stream_id' => $this->streams()->id
        ]);
    }
}
