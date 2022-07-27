<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illumiate\Support\Facades\Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;


class AuthController extends Controller
{
    /**
     * Create user
     * @param Request $request
     * @return User
     */
    public function createUser(Request $request)
    {
        try
        {
            $validateUser = Validator::make($request->all(),
            [
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required'
            ]);

            if($validateUser->fails())
             {
                 return response()->json([
                'status' => 'false',
                'message' => 'Validation Error',
                'error' => $validateUser->errors()
                 ], 401);
             }

             $user = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password)
             ]);

             return response()->json([
                'status' => 'true',
                'message' => 'User created successfully',
                'token' => $user->createToken("API TOKEN")->plainTextToken
                 ], 200);

        }
        catch (\Throwable $th)
        {
            return response()->json([
                'status' => 'false',
                'message' => $th->getMessage(),
                'error' => $validateUser->errors()
                 ], 500);
        }
        
    }

    /**
     * Login the user
     * @param Request $request
     * @return User
     */
    
    public function loginUser(Request $request)
    {
        try
        {
            $validateUser = Validator::make($request->all(),
            [
                
                'email' => 'required|email',
                'password' => 'required'
            ]);
    
            if($validateUser->fails())
             {
                 return response()->json([
                'status' => 'false',
                'message' => 'Validation Error',
                'error' => $validateUser->errors()
                 ], 401);
             }
    
             if(!FacadesAuth::attempt($request->only(['email','password'])))
             {
                return response()->json([
                    'status' => 'false',
                    'message' => 'Email & Password does not match with our record',
                    'error' => $validateUser->errors()
                ], 401);
             }
             
             $user = User::where('email', $request->email)->first();

             return response()->json([
                'status' => 'true',
                'message' => 'Login Successfully',
                'token' => $user->createToken("API TOKEN")->plainTextToken
                 ], 200);
    
        }
        catch (\Throwable $th)
        {
            return response()->json([
                'status' => 'false',
                'message' => $th->getMessage(),
                'error' => $validateUser->errors()
                 ], 500);
        }
    }
    
}
