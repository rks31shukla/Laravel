<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::get();
        return view('home',['students'=>$students]);
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $student = new Student;
        $student->name=$request->name;
        $student->city=$request->city;
        $student->marks=$request->marks;
        $student->save();
    
        return redirect(route('index'))->with(['status'=>'Student added!']);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::find($id);
        
        return view('editform',['student'=>$student]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = Student::find($id);
        $student->name=$request->name;
        $student->city=$request->city;
        $student->marks=$request->marks;
        $student->save();
        return redirect(route('index'))->with(['status'=>'Student updated!']);
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student  = Student::find($id);
        $student->delete();
        
        return redirect(route('index'))->with(['status'=>'Student deleted!']);
    }
}
