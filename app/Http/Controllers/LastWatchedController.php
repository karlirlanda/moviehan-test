<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Videos;

class LastWatchedController extends Controller
{
    protected $listener =  [
        'VideoViewed' => 'lastVideoWatched',
        'StreamedViewed' => 'lastStreamWatched'
    ];

    public function lastVideoWatched()
    {
        $this->user->last_watcheds->create([
            'user_id' => auth()->user()->id,
            'video_id' => $this->videos()->id
        ]);
    }


    public function lastStreamWatched()
    {
        $this->user->last_watcheds->create([
            'user_id' => auth()->user()->id,
            'stream_id' => $this->streams()->id
        ]);
    }
}
