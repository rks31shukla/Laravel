<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Student;
class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i=0; $i < 10; $i++) { 
            $st = new Student;
            $st->name = $faker->name();
            $st->city = $faker->city();
            $st->marks = $faker->numberBetween(10,100);
            $st->save();
        }
    }
}
