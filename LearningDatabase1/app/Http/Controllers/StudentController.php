<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    function show(){
        // $name='mohan';
        // $email='mohan@gmail.com';
        // DB::insert('insert into studentsss (name,email,city) values (?,?,?)',['Jack','jack@gmail.com','Ranchi']);
        // DB::insert('insert into studentsss (name,email,city) values (:name,:email,:city)',['name'=>$name,'email'=>$email,'city'=>'bokaro']);
        // $students = DB::select('select * from studentsss where id = ?',[1]);
        // $students = DB::select('select * from studentsss where id = :id',['id'=>1]);
        // $students = DB::select('select * from studentsss where id = 1');
        // DB::update('update studentsss set city = ? where id = ?',['dhanbad','4']);
        // DB::delete('delete from studentsss where id =?',[5]);
        DB::transaction(function(){
            DB::update('update studentsss set city = ? where id =?',['Dhanbad',1]);
            DB::delete('delete from studentsss where id = ?',[3]);
        });
        $students = DB::select('select * from studentsss ');
        // dd($students);
        return view('student',['students'=>$students]);
    }
}
