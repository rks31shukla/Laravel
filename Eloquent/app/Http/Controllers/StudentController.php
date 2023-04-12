<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
    public function show()
    {
        $students = [];
        // $students= Student::all();
        // $students = Student::where('city','like','%East%')->orderBy('name')->get();
        
        //chunking result
        // Student::chunk(3,function($students){
            //     echo 'chunk of data <br>';
            //     foreach ($students as $stu) {
                //         echo $stu->name;
                //         echo $stu->email;
        //         echo $stu->city;
        //         echo "<br>";
        //     }
        // });

        // $students = Student::find(1);
        // $students = Student::firstOrCreate(
        //     ['name'=>'Ravi'],
        //     ['email'=>'ravi@gmail.com','city'=>'bokaro','marks'=>90],
        // );
        // $students = Student::firstOrNew(
        //     ['name'=>'Ravi'],
        //     ['email'=>'ravi@gmail.com','city'=>'bokaro','marks'=>90],
        // );
        // $students->save(); 
        
        //aggregates
        // $students=Student::where('city','bokaro')->count();
        // $students=Student::where('city','like','%East%')->max('marks');
        // $students=Student::where('city','like','%East%')->min('marks');
        
        //insert new record
        // $student = new Student; 
        // $student->name = 'Jack';
        // $student->email = 'jack@gmail.com';
        // $student->city = 'bokaro';
        // $student->marks = 78;
        // $student->save();
        
        //insert using create
        // $student = Student::create([
            //     'name'=>'Tom',
            //     'email'=>'tom@gmail.com',
            //     'city'=>'ranchi',
            //     'marks'=>50,
            // ]);
            
            
            //update
            // $student = Student::find(15); 
            // $student->name = 'John';
            // $student->email = 'john@gmail.com';
            // $student->city = 'delhi';
            // $student->marks = 67;
            // $student->save();
            
            //  mass update
            
            // Student::where('city','bokaro')->update(['marks'=>100]);
            
            // // update or create
            // $students = Student::updateOrCreate(
            //     ['name'=>'Ravi'],
            //     ['email'=>'xyz@gmail.com','city'=>'bokaro','marks'=>90],
            // );
            
            // delete using delete method
            // $student=Student::find(3);
            // $student->delete();

            //delete using destroy
            // $student = Student::destroy(2);

            //delete using queries
            // $student  = Student::where('city','bokaro')->delete();

            //truncate
            // Student::truncate();

            // dd($student);
            return view('welcome',['students'=>$students]);
    }
}
