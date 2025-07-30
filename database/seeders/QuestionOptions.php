<?php

namespace Database\Seeders;

use App\Models\QuestionOptions as ModelsQuestionOptions;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionOptions extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $options = [
            [
                "question_id" => 1,
                "options" => "247",
                "is_correct_answer" => true
            ],
            [
                "question_id" => 1,
                "options" => "26",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 1,
                "options" => "12",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 1,
                "options" => "100",
                "is_correct_answer" => false
            ],
            //---------2
            [
                "question_id" => 2,
                "options" => "உயிர் எழுத்து",
                "is_correct_answer" => true
            ],
            [
                "question_id" => 2,
                "options" => "மெய் எழுத்து",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 2,
                "options" => "உயிர் மெய் எழுத்து",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 2,
                "options" => "எழுத்தல்ல",
                "is_correct_answer" => false
            ],
            //---3
            [
                "question_id" => 3,
                "options" => "உயிர் எழுத்து",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 3,
                "options" => "உயிர் மெய் எழுத்து",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 3,
                "options" => "மெய் எழுத்து",
                "is_correct_answer" => true
            ],
            [
                "question_id" => 3,
                "options" => "உயிர்மெய் எழுத்து",
                "is_correct_answer" => false
            ],
            //--4
            [
                "question_id" => 4,
                "options" => "உயிர் எழுத்து",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 4,
                "options" => "உயிர் மெய் எழுத்து",
                "is_correct_answer" => true
            ],
            [
                "question_id" => 4,
                "options" => "மெய் எழுத்து",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 4,
                "options" => "எழுத்தல்ல",
                "is_correct_answer" => false
            ],
            //--5
            [
                "question_id" => 5,
                "options" => "பெயர் சொல்",
                "is_correct_answer" => true
            ],
            [
                "question_id" => 5,
                "options" => "வினைச்சொல்",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 5,
                "options" => "உரிச்சொல்",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 5,
                "options" => "இடச் சொல்",
                "is_correct_answer" => false
            ],
        ];

        //----- English options
        $options2 = [
            [
                "question_id" => 6,
                "options" => "A",
                "is_correct_answer" => true
            ],
            [
                "question_id" => 6,
                "options" => "B",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 6,
                "options" => "C",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 6,
                "options" => "D",
                "is_correct_answer" => false
            ],
            //---------2
            [
                "question_id" => 7,
                "options" => "Huge",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 7,
                "options" => "Small",
                "is_correct_answer" => true
            ],
            [
                "question_id" => 7,
                "options" => "Tall",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 7,
                "options" => "Long",
                "is_correct_answer" => false
            ],
            //---3
            [
                "question_id" => 8,
                "options" => "Apple",
                "is_correct_answer" => true
            ],
            [
                "question_id" => 8,
                "options" => "Chair",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 8,
                "options" => "Book",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 8,
                "options" => "Car",
                "is_correct_answer" => false
            ],
            //--4
            [
                "question_id" => 9,
                "options" => "Water",
                "is_correct_answer" => true
            ],
            [
                "question_id" => 9,
                "options" => "Paper",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 9,
                "options" => "Shoes",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 9,
                "options" => "Pen",
                "is_correct_answer" => false
            ],
            //--5
            [
                "question_id" => 10,
                "options" => "Dog",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 10,
                "options" => "Cow",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 10,
                "options" => "Cat",
                "is_correct_answer" => true
            ],
            [
                "question_id" => 10,
                "options" => "Lion",
                "is_correct_answer" => false
            ],
        ];
        $HalfYearly = [
            [
                "question_id" => 12,
                "options" => "ம",
                "is_correct_answer" => true
            ],
            [
                "question_id" => 12,
                "options" => "ஆ",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 12,
                "options" => "அ",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 12,
                "options" => "ப",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 13,
                "options" => "பறக்கிறது",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 13,
                "options" => "குரைக்கும்",
                "is_correct_answer" => true
            ],
            [
                "question_id" => 13,
                "options" => "இடித்தழிக்கிறது",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 13,
                "options" => "பயிர் செய்கிறது",
                "is_correct_answer" => false
            ],

            [
                "question_id" => 14,
                "options" => "கால்",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 14,
                "options" => "கை",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 14,
                "options" => "மேல் பகுதி",
                "is_correct_answer" => true
            ],
            [
                "question_id" => 14,
                "options" => "காலடி",
                "is_correct_answer" => false
            ],

            [
                "question_id" => 15,
                "options" => "1",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 15,
                "options" => "2",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 15,
                "options" => "3",
                "is_correct_answer" => true
            ],
            [
                "question_id" => 15,
                "options" => "4",
                "is_correct_answer" => false
            ],

            [
                "question_id" => 16,
                "options" => "இரவில்",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 16,
                "options" => "பகலில்",
                "is_correct_answer" => true
            ],
            [
                "question_id" => 16,
                "options" => "மாலை",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 16,
                "options" => "மதியம்",
                "is_correct_answer" => false
            ],
        ];


        $HalfYearlyEnglish = [
            [
                "question_id" => 17,
                "options" => "B",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 17,
                "options" => "A",
                "is_correct_answer" => true
            ],
            [
                "question_id" => 17,
                "options" => "P",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 17,
                "options" => "L",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 18,
                "options" => "Spoon",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 18,
                "options" => "Pen",
                "is_correct_answer" => true
            ],
            [
                "question_id" => 18,
                "options" => "Plate",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 18,
                "options" => "Ball",
                "is_correct_answer" => false
            ],

            [
                "question_id" => 19,
                "options" => "Dog",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 19,
                "options" => "Cow",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 19,
                "options" => "Cat",
                "is_correct_answer" => true
            ],
            [
                "question_id" => 19,
                "options" => "Lion",
                "is_correct_answer" => false
            ],

            [
                "question_id" => 20,
                "options" => "Green",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 20,
                "options" => "Red",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 20,
                "options" => "Blue",
                "is_correct_answer" => true
            ],
            [
                "question_id" => 20,
                "options" => "Yellow",
                "is_correct_answer" => false
            ],

            [
                "question_id" => 21,
                "options" => "Four",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 21,
                "options" => "Six",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 21,
                "options" => "Eight",
                "is_correct_answer" => true
            ],
            [
                "question_id" => 21,
                "options" => "Two",
                "is_correct_answer" => false
            ],
        ];

        $HalfYearlyMaths = [
            [
                "question_id" => 22,
                "options" => "8",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 22,
                "options" => "10",
                "is_correct_answer" => true
            ],
            [
                "question_id" => 22,
                "options" => "7",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 22,
                "options" => "11",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 23,
                "options" => "3",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 23,
                "options" => "5",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 23,
                "options" => "9",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 23,
                "options" => "1",
                "is_correct_answer" => true
            ],

            [
                "question_id" => 24,
                "options" => "4",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 24,
                "options" => "6",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 24,
                "options" => "5",
                "is_correct_answer" => true
            ],
            [
                "question_id" => 24,
                "options" => "3",
                "is_correct_answer" => false
            ],

            [
                "question_id" => 25,
                "options" => "10",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 25,
                "options" => "4",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 25,
                "options" => "3",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 25,
                "options" => "5",
                "is_correct_answer" => true
            ],

            [
                "question_id" => 26,
                "options" => "Circle",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 26,
                "options" => "Square",
                "is_correct_answer" => true
            ],
            [
                "question_id" => 26,
                "options" => "Triangle",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 26,
                "options" => "Oval",
                "is_correct_answer" => false
            ],
        ];
        $AnnuallyQuestionOptions = [
            [
                "question_id" => 27,
                "options" => "அ",
                "is_correct_answer" => true
            ],
            [
                "question_id" => 27,
                "options" => "ம",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 27,
                "options" => "மா",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 27,
                "options" => "அா",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 28,
                "options" => "தேன்",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 28,
                "options" => "பசும்பால்",
                "is_correct_answer" => true
            ],
            [
                "question_id" => 28,
                "options" => "தண்ணீர்",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 28,
                "options" => "நெய்",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 29,
                "options" => "மரம்",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 29,
                "options" => "பூ (Flower)",
                "is_correct_answer" => true
            ],
            [
                "question_id" => 29,
                "options" => "பழம்",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 29,
                "options" => "மண்",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 30,
                "options" => "பறக்கிறது",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 30,
                "options" => "குரைக்கிறது",
                "is_correct_answer" => true
            ],
            [
                "question_id" => 30,
                "options" => "செழிக்கிறது",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 30,
                "options" => "வளர்க்கிறது",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 31,
                "options" => "கீழே",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 31,
                "options" => "நடு பகுதி",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 31,
                "options" => "மேல் பகுதி",
                "is_correct_answer" => true
            ],
            [
                "question_id" => 31,
                "options" => "கால் அருகில்",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 32,
                "options" => "Huge",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 32,
                "options" => "Small",
                "is_correct_answer" => true
            ],
            [
                "question_id" => 32,
                "options" => "Large",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 32,
                "options" => "Tall",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 33,
                "options" => "B",
                "is_correct_answer" => true
            ],
            [
                "question_id" => 33,
                "options" => "L",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 33,
                "options" => "A",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 33,
                "options" => "C",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 34,
                "options" => "Cat",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 34,
                "options" => "Cow",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 34,
                "options" => "Dog",
                "is_correct_answer" => true
            ],
            [
                "question_id" => 34,
                "options" => "Goat",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 35,
                "options" => "Mango",
                "is_correct_answer" => true
            ],
            [
                "question_id" => 35,
                "options" => "Car",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 35,
                "options" => "Plate",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 35,
                "options" => "Bag",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 36,
                "options" => "Cap",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 36,
                "options" => "Gloves",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 36,
                "options" => "Shoes",
                "is_correct_answer" => true
            ],
            [
                "question_id" => 36,
                "options" => "Tie",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 37,
                "options" => "4",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 37,
                "options" => "5",
                "is_correct_answer" => true
            ],
            [
                "question_id" => 37,
                "options" => "6",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 37,
                "options" => "3",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 38,
                "options" => "18",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 38,
                "options" => "20",
                "is_correct_answer" => true
            ],
            [
                "question_id" => 38,
                "options" => "21",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 38,
                "options" => "17",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 39,
                "options" => "5",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 39,
                "options" => "6",
                "is_correct_answer" => true
            ],
            [
                "question_id" => 39,
                "options" => "7",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 39,
                "options" => "4",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 40,
                "options" => "6",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 40,
                "options" => "5",
                "is_correct_answer" => true
            ],
            [
                "question_id" => 40,
                "options" => "4",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 40,
                "options" => "3",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 41,
                "options" => "Triangle",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 41,
                "options" => "Circle",
                "is_correct_answer" => false
            ],
            [
                "question_id" => 41,
                "options" => "Square",
                "is_correct_answer" => true
            ],
            [
                "question_id" => 41,
                "options" => "Oval",
                "is_correct_answer" => false
            ]
        ];
        foreach ($AnnuallyQuestionOptions as $option) {
            ModelsQuestionOptions::create($option);
        }
    }
}
