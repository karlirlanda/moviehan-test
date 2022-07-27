<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function __construct()
    {
        $this->user = Auth::user();
    }

    public function __invoke()
    {
        $this->user->video_likes->create([
            'user_id' => $this->user->id,
            'video_id' => $this->videos()->id
        ]);
    }
}