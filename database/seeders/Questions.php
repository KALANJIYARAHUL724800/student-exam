<?php

namespace Database\Seeders;

use App\Models\Questions as ModelsQuestions;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Questions extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions = [
            [
                "subject_id"=>1,
                "question_text"=>"தமிழ் எழுத்துகளின் எண்ணிக்கை எத்தனை?",
                "marks"=>2
            ],
            [
                "subject_id"=>1,
                "question_text"=>"'அ' என்பது எந்த எழுத்து வகை?",
                "marks"=>2
            ],
            [
                "subject_id"=>1,
                "question_text"=>"'க்' என்பது எது?",
                "marks"=>2
            ],
            [
                "subject_id"=>1,
                "question_text"=>"'கா' என்பது எது?",
                "marks"=>2
            ],
                        [
                "subject_id"=>1,
                "question_text"=>"'அம்மா' என்பது என்ன வகை சொல்?",
                "marks"=>2
            ],
        ];
       
        //-----------English subjects 
                $questions2 = [
            [
                "subject_id"=>2,
                "question_text"=>"What is the first letter of the alphabet?",
                "marks"=>2
            ],
            [
                "subject_id"=>2,
                "question_text"=>"What is the opposite of ‘big’?",
                "marks"=>2
            ],
            [
                "subject_id"=>2,
                "question_text"=>"Which one is a fruit?",
                "marks"=>2
            ],
            [
                "subject_id"=>2,
                "question_text"=>"What do you drink when you are thirsty?",
                "marks"=>2
            ],
                        [
                "subject_id"=>2,
                "question_text"=>"Which animal says 'meow'?",
                "marks"=>2
            ],
        ];
        //ModelsQuestions::insert($questions2);
         foreach($questions2 as $question){
            ModelsQuestions::create($question);
        }
    }
}
