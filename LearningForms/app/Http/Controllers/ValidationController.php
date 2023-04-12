<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidationController extends Controller
{
    function showForm()
    {
        return view('validationForm');
    }
    function signup(Request $req)
    {
        //SIngle Rule
        // $validate = $req->validate([
        //     'name'=>'required',
        //     'email'=>'required',
        // ]);
        //Multiple Rules
        // $validate = $req->validate([
        //     'name'=>['required','min:22'],
        //     'email'=>['required'],
        // ]);
        //Multiple Rules
        $validate = $req->validate([
            'name'=>'required|min:22',
            'email'=>'required',
        ]);
            print_r('Form Validated');
        $input = $req->except('_token');
        print_r($input);
        return view('validationForm', ['data' => $input]);
    }
}
