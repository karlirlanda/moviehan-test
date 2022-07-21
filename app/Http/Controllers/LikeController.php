<?php

namespace App\Http\Controllers;

use App\Models\Videos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function __construct()
    {
        $this->user = Auth::user();
    }

    public function __invoke()
    {
        $this->videos->video_likes->create([
            'user_id' => $this->user->id,
            'video_id' => $this->videos()->id
        ]);
    }
}
