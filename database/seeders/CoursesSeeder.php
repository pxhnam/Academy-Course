<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        try {
            DB::table('courses')->insert([
                'name' => 'HTML Cơ Bản',
                'lecturer' => 'Lê Tuấn',
                'thumbnail' => 'HTML.jpg',
                'num_of_chapters' => 10,
                'num_of_lessons' => 30,
                'time_to_complete' => 15,
                'description' => 'This is a sample course description.',
                'starts' => 4.5,
                'cost' => 500000,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            DB::table('courses')->insert([
                'name' => 'React Cơ Bản',
                'lecturer' => 'Lê Tuấn',
                'thumbnail' => 'react.png',
                'num_of_chapters' => 5,
                'num_of_lessons' => 10,
                'time_to_complete' => 7,
                'description' => 'This is a sample course description.',
                'starts' => 4.1,
                'cost' => 600000,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            DB::table('courses')->insert([
                'name' => 'PHP Cơ Bản',
                'lecturer' => 'Lê Tuấn',
                'thumbnail' => 'PHP.jpg',
                'num_of_chapters' => 12,
                'num_of_lessons' => 22,
                'time_to_complete' => 12,
                'description' => 'This is a sample course description.',
                'starts' => 4.3,
                'cost' => 570000,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            DB::table('courses')->insert([
                'name' => 'HTML & CSS',
                'lecturer' => 'Lê Tuấn',
                'thumbnail' => 'HTMLCSS.jpg',
                'num_of_chapters' => 12,
                'num_of_lessons' => 22,
                'time_to_complete' => 12,
                'description' => 'This is a sample course description.',
                'starts' => 4.3,
                'cost' => 570000,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            DB::table('courses')->insert([
                'name' => 'Javascript Nâng Cao',
                'lecturer' => 'Lê Tuấn',
                'thumbnail' => 'js.jpg',
                'num_of_chapters' => 15,
                'num_of_lessons' => 25,
                'time_to_complete' => 20,
                'description' => 'This is a sample course description.',
                'starts' => 4.7,
                'cost' => 700000,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            DB::table('courses')->insert([
                'name' => 'NodeJs Nâng Cao',
                'lecturer' => 'Lê Tuấn',
                'thumbnail' => 'js.jpg',
                'num_of_chapters' => 10,
                'num_of_lessons' => 20,
                'time_to_complete' => 8,
                'description' => 'This is a sample course description.',
                'starts' => 4.0,
                'cost' => 650000,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        } catch (\Exception $ex) {
        }
    }
}
