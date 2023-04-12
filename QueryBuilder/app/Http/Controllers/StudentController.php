<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    function show()
    {
        $students = '';
        // $students = DB::table('student')->get();
        // $students = DB::table('student')->where('city','bokaro')->value('name');

        // $students = DB::table('student')->find(2);

        //Retrieving a list of column values
        // $students = DB::table('student')->pluck('city','name');

        //Chunking Result
        //  DB::table('student')->orderBy('id')->chunk(3,function($students)
        // {
        //     echo "Chunk  of  Data <br>";

        //     foreach ($students as $key ) {
        //         echo $key->name;
        //         echo '<br>';
        //     } 
        //     return false;
        // });

        // using aggregate functions
        // $students=DB::table('student')->count();
        // $students=DB::table('student')->max('name');
        // $students=DB::table('student')->max('marks');

        // determinning if record exists
        // if (DB::table('student')->where('id','10')->exists()) {
        //     dd('yes');
        // }
        // if (DB::table('student')->where('id','20')->doesntExist()) {
        //     dd('yes');
        // }

        // //select method
        // $students = DB::table('student')->select('name','email')->get();

        // //using distinct
        // $students = DB::table('student')->select('name','email')->distinct()->get();
        // //where
        // $students = DB::table('student')->select('name','email')->where('id','>','6')->get();
        // $students = DB::table('student')->select('name','email')->where('name','like','s%')->orWhere('name','like','a%')->get();
        // $students = DB::table('student')->select('id','name','email')->whereBetween('id',[2,5])->orWhereBetween('id',[8,9])->get();
        
        // //whereDate
        // $students = DB::table('student')->select('name','email')->whereDate('pass_date','2023-04-07')->get();
        // //whereDay
        // $students = DB::table('student')->select('name','email')->whereDay('pass_date','5')->get();
        // //latest
        // $students = DB::table('student')->select('name','email')->latest('pass_date')->first();
        // //oldest
        // $students = DB::table('student')->select('name','email')->oldest('pass_date')->first();

        //groupBy and having
        // $students = DB::table('student')->groupBy('marks')->having('marks','>','50')->get();
        
        //take and skip
        // $students = DB::table('student')->take(3)->skip(2)->get();

        //insert
        // DB::table('student')->insert([
        //     'name'=>'jack',
        //     'email'=>'jack@gmail.com',
        //     'city'=>'bokaro',
        //     'marks'=>50,
        //     'pass_date'=>'2023-04-02'
        // ]);
        //insert multiple data
    //     DB::table('student')->insert([[
    //         'name'=>'jack',
    //         'email'=>'jack@gmail.com',
    //         'city'=>'bokaro',
    //         'marks'=>50,
    //         'pass_date'=>'2023-04-02'
    //     ],
    //     [
    //         'name'=>'mack',
    //         'email'=>'mack@gmail.com',
    //         'city'=>'ranchi',
    //         'marks'=>70,
    //         'pass_date'=>'2023-04-02'
    //     ]
    // ]);
    // insertIgnore
    // DB::table('student')->insertOrIgnore([
    //     'id'=>1,
    //         'name'=>'tom',
    //         'email'=>'tom@gmail.com',
    //         'city'=>'bokaro',
    //         'marks'=>50,
    //         'pass_date'=>'2023-04-02'
    //     ]);
    //insertGetId
    // $id=DB::table('student')->insertGetId([
    //         'name'=>'tom',
    //         'email'=>'tom@gmail.com',
    //         'city'=>'bokaro',
    //         'marks'=>50,
    //         'pass_date'=>'2023-04-02'
    //     ]);


    //update
    // DB::table('student')->where('id',2)->update([
    //     'name'=>'Raj',
    //     'email'=>'raj@email.com',
    //     'city'=>'ranchi'
    // ]);

    // //delete
    // DB::table('student')->where('id',14)->delete();

    //truncate - delete all records  
    // DB::table('student')->truncate();
        dd($students);
        return view('student',['students'=>$students]);
    }
}
