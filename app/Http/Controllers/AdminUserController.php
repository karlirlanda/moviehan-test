<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function show($id)
  {
    $user = User::find($id);

    if ($user) {
      return $user;
    } else {
      return "No user available";
    }
  }


  public function all()
  {
    $user = User::all();

    return $user;
  }


  public function destroy($id)
  {
    $user = User::findOrFail($id);
    $deleted = $user->delete();

    if ($deleted) {
      return response()->json([
        'message' => 'User successfully deleted'
      ]);
    }
  }
}
