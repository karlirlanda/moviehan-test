<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\StoreGenreRequest;
use App\Models\Genres;

class GenresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Genres $genres)
    {
        // $genres = Genres::all();

        // return response()->json($genres, 200);

        dd($genres);
    }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     try
    //     {
    //         $validateUser = Validator::make($request->all(),
    //         [
    //             'name' => 'required',
    //             'email' => 'required|email|unique:users,email',
    //             'password' => 'required'
    //         ]);

    //         if($validateUser->fails())
    //          {
    //              return response()->json([
    //             'status' => 'false',
    //             'message' => 'Validation Error',
    //             'error' => $validateUser->errors()
    //              ], 401);
    //          }

    //          $user = User::create([
    //                 'name' => $request->name,
    //                 'email' => $request->email,
    //                 'password' => Hash::make($request->password)
    //          ]);

    //          return response()->json([
    //             'status' => 'true',
    //             'message' => 'User created successfully',
    //             'token' => $user->createToken("API TOKEN")->plainTextToken
    //              ], 200);

    //     }
    //     catch (\Throwable $th)
    //     {
    //         return response()->json([
    //             'status' => 'false',
    //             'message' => $th->getMessage(),
    //             'error' => $validateUser->errors()
    //              ], 500);
    //     }
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     $user = User::findOrFail($id);
       
    //     $user->delete();

    //     return response()->json([
    //             'message'=>'User deleted succesfuly!',
    //             'user' => $user
    //     ], 200);
    // }
    // public function login(Request $request)
    // {
    //     try
    //     {
    //         $validateUser = Validator::make($request->all(),
    //         [
                
    //             'email' => 'required|email',
    //             'password' => 'required'
    //         ]);
    
    //         if($validateUser->fails())
    //          {
    //              return response()->json([
    //             'status' => 'false',
    //             'message' => 'Validation Error',
    //             'error' => $validateUser->errors()
    //              ], 401);
    //          }
    
    //          if(!Auth::attempt($request->only(['email','password'])))
    //          {
    //             return response()->json([
    //                 'status' => 'false',
    //                 'message' => 'Email & Password does not match with our record',
    //                 'error' => $validateUser->errors()
    //             ], 401);
    //          }
             
    //          $user = User::where('email', $request->email)->first();

    //          return response()->json([
    //             'status' => 'true',
    //             'message' => 'Login Successfully',
    //             'token' => $user->createToken("API TOKEN")->plainTextToken
    //              ], 200);
    
    //     }
    //     catch (\Throwable $th)
    //     {
    //         return response()->json([
    //             'status' => 'false',
    //             'message' => $th->getMessage(),
    //             'error' => $validateUser->errors()
    //              ], 500);
    //     }
    // }
}