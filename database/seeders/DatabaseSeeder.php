<?php

namespace Database\Seeders;

use App\Models\ExamMaster;
use App\Models\Questions;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       
       $this->call([
        ClassMaster::class,
        ExamMaster::class,
        Questions::class,
        QuestionOptions::class,
        Students::class,
        Users::class
       ]);
    }
}
