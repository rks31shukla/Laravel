<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|confirmed',
            'tnc'=>'required'
        ]);
        if (User::where('email',$request->email)->first()) {
            return response([
                'message'=>'user already exists'
            ],400);
        }
        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make( $request->password),
            'tnc'=>json_decode( $request->tnc),
        ]);
        $token = $user->createToken($request->email)->plainTextToken;

        return response([
            'user'=>$user,
            'token'=>$token,
            'mesasage'=>'User created',
            'status'=>'success'
        ],200);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);
        $user = User::where('email',$request->email)->first();

        if (!$user || !Hash::check($request->password,$user->password)) {
            return response([
                'message'=>'invalid user email or password'
            ],400);
        }
        $token = $user->createToken($request->email)->plainTextToken;
        return   response([
            'user'=>$user,
            'token'=>$token,
            'message'=>'Logged in successfully'
        ],200);
    }

    public function logout()
    {

        auth()->user()->tokens()->delete();
        return response([
            'message'=>'logged out successfully',
            'status'=>'Success'
        ],200);
    }
    public function logged_user()
    {
        $user = auth()->user();
        return response([
            'user'=>$user,
            'message'=>'logged user data',
            'status'=>'Success'
        ],200);
    }
    public function changePassword(Request $request)
    {
        $request->validate([
            'password'=>'required|confirmed',
        ]);
        $user = auth()->user();
        $user->password =Hash::make($request->password) ;
        $user->save();
        return response([
            'user'=>$user,
            'message'=>'password changed successfully',
            'status'=>'Success'
        ],200);
    }


}
