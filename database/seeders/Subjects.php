<?php

namespace Database\Seeders;

use App\Models\Subjects as ModelsSubjects;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Subjects extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subjects = [
            [
                "class_id" => 1,
                "exam_id" => 1,
                "subject_name" => "Tamil"
            ],
            [
                "class_id" => 1,
                "exam_id" => 1,
                "subject_name" => "English"
            ],
            [
                "class_id" => 1,
                "exam_id" => 2,
                "subject_name" => "Tamil"
            ],
            [
                "class_id" => 1,
                "exam_id" => 2,
                "subject_name" => "English"
            ],
            [
                "class_id" => 1,
                "exam_id" => 2,
                "subject_name" => "Maths"
            ],
            [
                "class_id" => 1,
                "exam_id" => 3,
                "subject_name" => "Tamil"
            ],
            [
                "class_id" => 1,
                "exam_id" => 3,
                "subject_name" => "English"
            ],
            [
                "class_id" => 1,
                "exam_id" => 3,
                "subject_name" => "Maths"
            ],
            [
                "class_id" => 2,
                "exam_id" => 1,
                "subject_name" => "Tamil"
            ],
            [
                "class_id" => 2,
                "exam_id" => 1,
                "subject_name" => "English"
            ],
            [
                "class_id" => 2,
                "exam_id" => 1,
                "subject_name" => "Maths"
            ],
            [
                "class_id" => 2,
                "exam_id" => 2,
                "subject_name" => "Tamil"
            ],
            [
                "class_id" => 2,
                "exam_id" => 2,
                "subject_name" => "English"
            ],
            [
                "class_id" => 2,
                "exam_id" => 2,
                "subject_name" => "Maths"
            ],
            [
                "class_id" => 2,
                "exam_id" => 2,
                "subject_name" => "Science"
            ],
            [
                "class_id" => 2,
                "exam_id" => 3,
                "subject_name" => "Tamil"
            ],
            [
                "class_id" => 2,
                "exam_id" => 3,
                "subject_name" => "English"
            ],
            [
                "class_id" => 2,
                "exam_id" => 3,
                "subject_name" => "Maths"
            ],
            [
                "class_id" => 2,
                "exam_id" => 3,
                "subject_name" => "Science"
            ],
            [
                "class_id" => 3,
                "exam_id" => 1,
                "subject_name" => "Tamil"
            ],
            [
                "class_id" => 3,
                "exam_id" => 1,
                "subject_name" => "English"
            ],
            [
                "class_id" => 3,
                "exam_id" => 1,
                "subject_name" => "Science"
            ],
            [
                "class_id" => 3,
                "exam_id" => 2,
                "subject_name" => "Computer"
            ],
            [
                "class_id" => 3,
                "exam_id" => 2,
                "subject_name" => "Maths"
            ],
            [
                "class_id" => 3,
                "exam_id" => 2,
                "subject_name" => "Social Science"
            ],
        ];
        foreach ($subjects as $subject) {
            ModelsSubjects::create($subject);
        }
    }
}