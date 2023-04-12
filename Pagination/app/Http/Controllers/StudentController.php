<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class StudentController extends Controller
{
    function show()
    {
        // $students = DB::table('student')->paginate(5);
        $students = DB::table('student')->simplePaginate(5);
        $students->withPath('/cs/students');
        return view('student',['students'=>$students]);
    }
}
