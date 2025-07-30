<?php

namespace Database\Seeders;

use App\Models\Students as ModelsStudents;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class Students extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = [
            [
                "class_id" => 1,
                "student_name" => "saran",
                "student_email" => "saran123@gmail.com",
                "student_password" => Hash::make("saran123")
            ],
            [
                "class_id" => 2,
                "student_name" => "mukesh",
                "student_email" => "mukesh123@gmail.com",
                "student_password" => Hash::make("mukesh123")
            ],
            [
                "class_id" => 3,
                "student_name" => "suresh",
                "student_email" => "suresh123@gmail.com",
                "student_password" => Hash::make("suresh123")
            ],
            [
                "class_id" => 4,
                "student_name" => "manoj",
                "student_email" => "manoj123@gmail.com",
                "student_password" => Hash::make("manoj123")
            ],
            [
                "class_id" => 5,
                "student_name" => "maran",
                "student_email" => "maran123@gmail.com",
                "student_password" => Hash::make("maran123")
            ]
        ];
        // ModelsStudents::insert($students);
        $Students = [
            [
                "class_id" => 1,
                "name" => "ajith",
                "email" => "ajith123@gmail.com",
                "password" => "ajith123",
                "usertype" => 0,
                "active_flag" => 1
            ],
            [
                "class_id" => 1,
                "name" => "musthafa",
                "email" => "musthafa123@gmail.com",
                "password" => "musthafa123",
                "usertype" => 0,
                "active_flag" => 1
            ]
        ];
        foreach ($Students as $Datas) {
            User::create($Datas);
        }
    }
}