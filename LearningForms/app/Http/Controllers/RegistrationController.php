<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    function showForm(){
        // print_r('Get Method');
        return view('registration');
    }
    function signup(Request $request){
        // print_r('Post Method');
        // dd($request);
        // print_r($request->all());
        // print_r($request->input('name'));
        // print_r($request->input('email'));
        // print_r($request->input('password'));
        // print_r($request->name);
        // print_r($request->email);
        // print_r($request->password);
        // if ($request->hasAny(['email'])) {
        //     print_r($request->name);
        // }
        // if ($request->filled('email')) {
        //     print_r($request->name);
        // }
        // if ($request->missing('username')) {
        //     print_r("Email missing");
        // }
        // $request->whenHas('name',function($input){
        //     print_r($input);
        // });
        // $request->whenFilled('name',function($input){
        //     print_r($input);
        // });
        $request->flash(); 
        // $request->flashOnly(['name','email']); 
        $request->flashExcept('password'); 

        // return redirect('oldData')->withInput();
        // return redirect()->route('old')->withInput();
        // return redirect()->route('old')->withInput($request->except('password'));
        

        // print_r($request->old('name'));
        // print_r($request->old('email'));
        // print_r($request->old('password'));
        return view('registration');
    }
}
