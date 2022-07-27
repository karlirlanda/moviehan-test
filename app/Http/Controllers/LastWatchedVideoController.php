<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LastWatchedVideos;
use Illuminate\Support\Facades\Auth;

class LastWatchedVideosController extends Controller
{
    protected $listener =  [
        'VideoViewed' => 'lastVideoWatched'
    ];

    public function __construct()
    {
        $this->user = Auth::user();
    }

    public function lastVideoWatched()
    {
        $this->user->last_watched_video->create([
            'user_id' =>  $this->user->id,
            'video_id' => $this->videos()->id
        ]);
    }
}
