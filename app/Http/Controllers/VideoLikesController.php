<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoLikesController extends Controller
{
    public function like()
    {
        $this->videos->video_likes->create([
            'user_id' => auth()->user()->id,
            'video_id' => $this->videos()->id
        ]);
    }
}
