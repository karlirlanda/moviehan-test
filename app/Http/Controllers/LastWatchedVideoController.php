<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LastWatchedVideo;

class LastWatchedVideoController extends Controller
{
    protected $listener =  [
        'VideoViewed' => 'lastVideoWatched'
    ];

    public function lastVideoWatched()
    {
        $this->user->last_watched_video->create([
            'user_id' => auth()->user()->id,
            'video_id' => $this->videos()->id
        ]);
    }
}
