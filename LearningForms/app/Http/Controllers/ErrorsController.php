<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorsController extends Controller
{
    function showForm()
    {
        return view('formwithError');
    }
    function signup(Request $req)
    {
        $validate = $req->validate([
            'name'=>'required|min:3',
            'email'=>'required',
            'password'=>'required',
        ]);
            print_r('Form Validated');
        $input = $req->except('_token');
        print_r($input);
        return view('formwithError', ['data' => $input]);
    }
}
