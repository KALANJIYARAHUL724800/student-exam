<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class Users extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                $students = [
            [
                "class_id"=>1,
                "name"=>"saran",
                "email"=>"saran123@gmail.com",
                "password"=>Hash::make("saran123")
            ],
            [
                "class_id"=>2,
                "name"=>"mukesh",
                "email"=>"mukesh123@gmail.com",
                "password"=>Hash::make("mukesh123")
            ],
            [
                "class_id"=>3,
                "name"=>"suresh",
                "email"=>"suresh123@gmail.com",
                "password"=>Hash::make("suresh123")
            ],
            [
                "class_id"=>4,
                "name"=>"manoj",
                "email"=>"manoj123@gmail.com",
                "password"=>Hash::make("manoj123")
            ],
            [
                "class_id"=>5,
                "name"=>"maran",
                "email"=>"maran123@gmail.com",
                "password"=>Hash::make("maran123")
            ]
        ];
        $admins = [
            [
                "name"=>"srithar",
                "email"=>"srithar123@gmail.com",
                "password"=>Hash::make("srithar123"),
                "usertype"=>true
            ],
            [
                "name"=>"sathik",
                "email"=>"sathik123@gmail.com",
                "password"=>Hash::make("sathik23"),
                "usertype"=>true
            ]
        ];
        foreach($admins as $admin){
            User::create($admin);
        }
    }
}
