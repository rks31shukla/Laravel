<?php

namespace App\Http\Controllers;

use App\Rules\UpperCase;
use Illuminate\Http\Request;

class CustomController extends Controller
{
    function showForm()
    {
        return view("customRules");
    }
    function signup(Request $req)
    {

       $validate= $req->validate([
            'name' => [
                // new Uppercase,
                //closure
                function ($attribute, $value, $fail) {
                    if (strtoupper( $value)=="SONAM") {

                        $fail('The'.$attribute.'is invalid!');
                    }
                }
            ],
        ]);
        // dd($validate);
        return view('customRules',['data'=>$validate]);
    }
}
