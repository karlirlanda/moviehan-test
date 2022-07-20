<?php

namespace App\Http\Controllers;

use App\Models\Videos;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function __construct()
    {
        $this->videos = new Videos();
    }

    public function __invoke()
    {
        $this->videos->video_likes->create([
            'user_id' => auth()->user()->id,
            'video_id' => $this->videos()->id
        ]);
    }
}
