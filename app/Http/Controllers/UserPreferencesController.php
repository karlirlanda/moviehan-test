<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserPreferencesController extends Controller
{
    public function index()
    {
        $videos = Auth::user()->genres()->orderByRaw('SUM(genres) DESC')->first();

        return view('videos.user_preference', compact('videos'));
    }
}
