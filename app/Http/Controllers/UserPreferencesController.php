<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserPreferences;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class UserPreferencesController extends Controller
{
    public function store(Request $request)
    {
        //$user = auth()->user();
        $user = User::find(1);

        $user->genres()->attach($request->input('genres', []));
        $user->categories()->attach($request->input('category', []));

        return response()->json(["Success" => "User preferences created"]);
    }
}
