<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;


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

  public function user_preferences(Request $request)
  {
    // return $user_preference;
  }

  public function changePassword()
  {
    return view('account-settings');
  }

  public function updatePassword(Request $request)
  {


    #validation
    $request->validate([

        'old_password' => 'required',

        'new_password' => 'required|confirmed',
      ]);

    #Match the old password
    if (!Hash::check($request->old_password, auth()->user()->password)) {
      dd("Old Password Doesnt Match");
    }


    #Update
    User::whereId(auth()->user()->id)->update([
        'password' => Hash::make($request->new_password)
    ]);

    // return back()->with("status", "Password changed successfully!");
    dd('Password Changed Successfully!');
  }







}
