<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserPreferenceController extends Controller
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
