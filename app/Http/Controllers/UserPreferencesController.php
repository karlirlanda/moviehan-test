<?php

namespace App\Http\Controllers;

use App\Models\UserPreferences;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class UserPreferencesController extends Controller
{
    public function __construct()
    {
        $this->user_preference = new UserPreferences();
    }


    // public function user_preferences_details()
    // {
    //     $videos = Auth::user()->genres()->orderByRaw('SUM(genres) DESC')->first();

    //     return view('videos.user_preference', compact('videos'));
    // }

    public function store(Request $request)
    {

        $this->user_preference->create([
            'user_id' => auth()->user()->id
        ]);

        $this->user_preference->category()->attach($request->input('category', []));
        $this->user_preference->genres()->attach($request->input('genres', []));
        $this->user_preference->tags()->attach($request->input('tags', []));;
    }
}
