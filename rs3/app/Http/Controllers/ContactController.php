<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    function show(){
        $name="Sonam";
        $students=['Rahul','Sumit','Mohan','Ravi'];
        // $students=[];
        return view('contact',['nm'=>$name,'students'=>$students]);
    }
}
