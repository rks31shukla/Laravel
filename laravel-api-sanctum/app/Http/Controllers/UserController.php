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
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        
        $token = $user->createToken('myToken')->plainTextToken;
        
        return response([
            'user' => $user,
            'token' => $token
        ]);
    }
    
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        
        $user = User::where('email',$request->email)->first();
        
        if (!$user or !Hash::check($request->password,$user->password))  {
            return response([
                'user'=>$user,
                'message'=>'Invalid credentials'
            ],401);
        }
        $token = $user->createToken('myToken')->plainTextToken;
        
        return response([
            'user' => $user,
            'token' => $token
        ],200);
    }
    public function logout()
    {
        auth()->user()->tokens()->delete();
        return response([
            'message'=>'Successfully Logged out!',
        ]);
    }
    
}
