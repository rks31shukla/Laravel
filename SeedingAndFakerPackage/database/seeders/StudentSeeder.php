<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// imported by me
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('student')->insert([
        //     'name'=>'Sonam',
        //     'email'=>'sonam@gmail.com',
        //     'password'=> Hash::make('sonam123') ,
        // ]);
        // DB::table('student')->insert([
        //     'name'=>Str::random(10),
        //     'email'=>Str::random(10).'@gmail.com',
        //     'password'=> Hash::make(Str::random(10)) ,
        // ]);
        // for ($i=0; $i < 10; $i++) { 
            
        //     DB::table('student')->insert([
        //             'name'=>Str::random(10),
        //             'email'=>Str::random(10).'@gmail.com',
        //             'password'=> Hash::make(Str::random(10)) ,
        //         ]);
        //     }

        $faker  = Faker::create();

        for ($i=0; $i < 10; $i++) { 
            
            DB::table('student')->insert([
                    'name'=>$faker->name(),
                    // 'email'=>$faker->unique()->email(),
                    'email'=>$faker->unique()->safeEmail(),
                    'password'=> Hash::make($faker->password()) ,
                ]);
            }
    }
}
