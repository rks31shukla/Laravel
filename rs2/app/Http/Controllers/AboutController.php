<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //Controller returning string
    function show($name)
    {
        $msg="I love na!";
        // return "Hello AboutContoller";
        return view('aboutme',['name'=>$name,'msg'=>$msg]);
    }
    // function show($name)
    // {
    //     return "Hello AboutContoller".$name;
    // }
}
