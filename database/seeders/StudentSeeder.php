<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("students")->insert([
            [
                'name' => 'Nakita Semesta',
                'student_id_number' => 'F55123032',
                'email' => 'wuuuwsh@gmail.com',
                'phone_number' => '012345678910',
                'birth_date' => '2004-05-09',
                'gender' => 'male',
                'status' => 'Active',
                'major_id' => 1,
            ],
            [
                'name' => 'Nikolas Jacksoooonnn',
                'student_id_number' => 'F55123001',
                'email' => 'jackson@gmail.com',
                'phone_number' => '085280284736',
                'birth_date' => '2004-07-14',
                'gender' => 'male',
                'status' => 'Active',
                'major_id' => 2,
            ]
        ]);
    }
}
