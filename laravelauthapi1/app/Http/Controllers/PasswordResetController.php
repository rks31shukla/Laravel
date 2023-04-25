<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\PasswordReset;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use Illuminate\Support\Str;

class PasswordResetController extends Controller
{
    function send_reset_password_email(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
        ]);
        $user=User::where('email',$request->email)->first();
        if (!$user) {
            return response([
                'message'=>'email is not registered',
                'status'=>'failed'
            ],400);
        }

        //generate token

        $token = Str::random(60);

        //saving password to reset table
        PasswordReset::create([
            'email'=>$request->email,
            'token'=>$token,
            'created_at'=>Carbon::now(),  
        ]);


        // dump('http://127.0.0.1:8000/api/user/reset/'.$token);

        //Sending email with password reset view

        Mail::send('reset',['token'=>$token],function (Message $message) use($user)
        {
            $message->subject('Reset your password');
            $message->to($user->email);
        });

        return response([
            'message'=>'Password reset email sent ... Check your Email .'
            ,'status'=>'Success'
        ]);
    }

    public function reset(Request $request,$token)
    {
        //delete tokn after 1 min
        $formatted = Carbon::now()->subMinutes(1)->toDateTimeString();
        $request->validate([
            'password'=>'required|confirmed'
        ]);
        PasswordReset::where('created_at',$formatted)->delete();
        $passwordReset = PasswordReset::where('token',$token)->first();
        if (!$passwordReset) {
            return response([
                'message'=>'Token invalid or expired',
                'status'=>'failed'
            ],400);
            
        }
        $user = User::where('email',$passwordReset->email)->first();
        $user->password = Hash::make($request->password);
        $user->save();
        
        //delete token after reset
        $passwordReset = PasswordReset::where('email',$user->email)->delete();
        return response([
            'message'=>'reset successful',
                'status'=>'success'
        ]);
    }
}
