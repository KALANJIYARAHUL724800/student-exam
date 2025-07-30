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
                "subject_id" => 1,
                "question_text" => "தமிழ் எழுத்துகளின் எண்ணிக்கை எத்தனை?",
                "marks" => 2
            ],
            [
                "subject_id" => 1,
                "question_text" => "'அ' என்பது எந்த எழுத்து வகை?",
                "marks" => 2
            ],
            [
                "subject_id" => 1,
                "question_text" => "'க்' என்பது எது?",
                "marks" => 2
            ],
            [
                "subject_id" => 1,
                "question_text" => "'கா' என்பது எது?",
                "marks" => 2
            ],
            [
                "subject_id" => 1,
                "question_text" => "'அம்மா' என்பது என்ன வகை சொல்?",
                "marks" => 2
            ],
        ];

        //-----------English subjects 
        $questions3 = [
            [
                "subject_id" => 2,
                "question_text" => "What is the first letter of the alphabet?",
                "marks" => 2
            ],
            [
                "subject_id" => 2,
                "question_text" => "What is the opposite of big?",
                "marks" => 2
            ],
            [
                "subject_id" => 2,
                "question_text" => "Which one is a fruit?",
                "marks" => 2
            ],
            [
                "subject_id" => 2,
                "question_text" => "What do you drink when you are thirsty?",
                "marks" => 2
            ],
            [
                "subject_id" => 2,
                "question_text" => "Which animal says 'meow'?",
                "marks" => 2
            ],
        ];
        //ModelsQuestions::insert($questions2);


        $HalfYearly = [
            [
                "subject_id" => 3,
                "question_text" => "'மா' என்ற வார்த்தையில் முதல் எழுத்து எது?",
                "marks" => 2
            ],
            [
                "subject_id" => 3,
                "question_text" => "'நாய்' என்ன செய்கிறது?",
                "marks" => 2
            ],
            [
                "subject_id" => 3,
                "question_text" => "'தலை' என்பது உடலின் எந்த பகுதி?",
                "marks" => 2
            ],
            [
                "subject_id" => 3,
                "question_text" => "'அம்மா' என்ற வார்த்தையில் எத்தனை எழுத்துகள் இருக்கின்றன?",
                "marks" => 2
            ],
            [
                "subject_id" => 3,
                "question_text" => "சூரியன்' எப்போது தோன்றும்?",
                "marks" => 2
            ]
        ];

        $HalfYearlyEnglish = [

            [
                "subject_id" => 4,
                "question_text" => "What is the first letter of the word 'Apple'",
                "marks" => 2
            ],
            [
                "subject_id" => 4,
                "question_text" => "What do we use to write?",
                "marks" => 2
            ],
            [
                "subject_id" => 4,
                "question_text" => "Which animal says 'Meow'?",
                "marks" => 2
            ],
            [
                "subject_id" => 4,
                "question_text" => "What is the color of the sky?",
                "marks" => 2
            ],
            [
                "subject_id" => 4,
                "question_text" => "How many legs does a spider have?",
                "marks" => 2
            ]
        ];
        $HalfYearlyMaths = [

            [
                "subject_id" => 5,
                "question_text" => "What comes after 9?",
                "marks" => 2
            ],
            [
                "subject_id" => 5,
                "question_text" => "Which number is smallest?",
                "marks" => 2
            ],
            [
                "subject_id" => 5,
                "question_text" => "2 + 3 = ?",
                "marks" => 2
            ],
            [
                "subject_id" => 5,
                "question_text" => "Count the fingers in one hand.",
                "marks" => 2
            ],
            [
                "subject_id" => 5,
                "question_text" => "Which shape has 4 sides?",
                "marks" => 2
            ]
        ];


        $AnnuallyQuestions = [
            [
                "subject_id" => 6,
                "question_text" => "‘அம்மா’ என்ற வார்த்தையில் முதல் எழுத்து எது?",
                "marks" => 2
            ],
            [
                "subject_id" => 6,
                "question_text" => "பசு எதைக் கொடுக்கும்?",
                "marks" => 2
            ],
            [
                "subject_id" => 6,
                "question_text" => "‘மலர்’ என்பதற்கு என்ன அர்த்தம்?",
                "marks" => 2
            ],
            [
                "subject_id" => 6,
                "question_text" => "நாய் என்ன செய்கிறது?",
                "marks" => 2
            ],
            [
                "subject_id" => 6,
                "question_text" => "'தலை' உடலில் எங்கு உள்ளது?",
                "marks" => 2
            ],
            [
                "subject_id" => 7,
                "question_text" => "What is the opposite of 'Big'?",
                "marks" => 2
            ],
            [
                "subject_id" => 7,
                "question_text" => "What is the first letter of the word 'Ball'?",
                "marks" => 2
            ],
            [
                "subject_id" => 7,
                "question_text" => "Which animal barks?",
                "marks" => 2
            ],
            [
                "subject_id" => 7,
                "question_text" => "Which one is a fruit?",
                "marks" => 2
            ],
            [
                "subject_id" => 7,
                "question_text" => "What do you wear on your feet?",
                "marks" => 2
            ],
            [
                "subject_id" => 8,
                "question_text" => "2 + 3 = ?",
                "marks" => 2
            ],
            [
                "subject_id" => 8,
                "question_text" => "What comes after 19?",
                "marks" => 2
            ],
            [
                "subject_id" => 8,
                "question_text" => "10 – 4 = ?",
                "marks" => 2
            ],
            [
                "subject_id" => 8,
                "question_text" => "Count the stars: *****",
                "marks" => 2
            ],
            [
                "subject_id" => 8,
                "question_text" => "Which shape has 4 equal sides?",
                "marks" => 2
            ]
        ];
        foreach ($AnnuallyQuestions as $question) {
            ModelsQuestions::create($question);
        }
    }
}
