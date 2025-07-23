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
                "question_id"=>1,
                "options"=>"247",
                "is_correct_answer"=>true
            ],
            [
                "question_id"=>1,
                "options"=>"26",
                "is_correct_answer"=>false
            ],
            [
                "question_id"=>1,
                "options"=>"12",
                "is_correct_answer"=>false
            ],
            [
                "question_id"=>1,
                "options"=>"100",
                "is_correct_answer"=>false
            ],
            //---------2
            [
                "question_id"=>2,
                "options"=>"உயிர் எழுத்து",
                "is_correct_answer"=>true
            ],
            [
                "question_id"=>2,
                "options"=>"மெய் எழுத்து",
                "is_correct_answer"=>false
            ],
            [
                "question_id"=>2,
                "options"=>"உயிர் மெய் எழுத்து",
                "is_correct_answer"=>false
            ],
            [
                "question_id"=>2,
                "options"=>"எழுத்தல்ல",
                "is_correct_answer"=>false
            ],
            //---3
            [
                "question_id"=>3,
                "options"=>"உயிர் எழுத்து",
                "is_correct_answer"=>false
            ],
            [
                "question_id"=>3,
                "options"=>"உயிர் மெய் எழுத்து",
                "is_correct_answer"=>false
            ],
            [
                "question_id"=>3,
                "options"=>"மெய் எழுத்து",
                "is_correct_answer"=>true
            ],
            [
                "question_id"=>3,
                "options"=>"உயிர்மெய் எழுத்து",
                "is_correct_answer"=>false
            ],
            //--4
            [
                "question_id"=>4,
                "options"=>"உயிர் எழுத்து",
                "is_correct_answer"=>false
            ],
            [
                "question_id"=>4,
                "options"=>"உயிர் மெய் எழுத்து",
                "is_correct_answer"=>true
            ],
            [
                "question_id"=>4,
                "options"=>"மெய் எழுத்து",
                "is_correct_answer"=>false
            ],
            [
                "question_id"=>4,
                "options"=>"எழுத்தல்ல",
                "is_correct_answer"=>false
            ],
            //--5
            [
                "question_id"=>5,
                "options"=>"பெயர் சொல்",
                "is_correct_answer"=>true
            ],
            [
                "question_id"=>5,
                "options"=>"வினைச்சொல்",
                "is_correct_answer"=>false
            ],
            [
                "question_id"=>5,
                "options"=>"உரிச்சொல்",
                "is_correct_answer"=>false
            ],
            [
                "question_id"=>5,
                "options"=>"இடச் சொல்",
                "is_correct_answer"=>false
            ],
        ];
    
        //----- English options
                $options2 = [
            [
                "question_id"=>6,
                "options"=>"A",
                "is_correct_answer"=>true
            ],
            [
                "question_id"=>6,
                "options"=>"B",
                "is_correct_answer"=>false
            ],
            [
                "question_id"=>6,
                "options"=>"C",
                "is_correct_answer"=>false
            ],
            [
                "question_id"=>6,
                "options"=>"D",
                "is_correct_answer"=>false
            ],
            //---------2
            [
                "question_id"=>7,
                "options"=>"Huge",
                "is_correct_answer"=>false
            ],
            [
                "question_id"=>7,
                "options"=>"Small",
                "is_correct_answer"=>true
            ],
            [
                "question_id"=>7,
                "options"=>"Tall",
                "is_correct_answer"=>false
            ],
            [
                "question_id"=>7,
                "options"=>"Long",
                "is_correct_answer"=>false
            ],
            //---3
            [
                "question_id"=>8,
                "options"=>"Apple",
                "is_correct_answer"=>true
            ],
            [
                "question_id"=>8,
                "options"=>"Chair",
                "is_correct_answer"=>false
            ],
            [
                "question_id"=>8,
                "options"=>"Book",
                "is_correct_answer"=>false
            ],
            [
                "question_id"=>8,
                "options"=>"Car",
                "is_correct_answer"=>false
            ],
            //--4
            [
                "question_id"=>9,
                "options"=>"Water",
                "is_correct_answer"=>true
            ],
            [
                "question_id"=>9,
                "options"=>"Paper",
                "is_correct_answer"=>false
            ],
            [
                "question_id"=>9,
                "options"=>"Shoes",
                "is_correct_answer"=>false
            ],
            [
                "question_id"=>9,
                "options"=>"Pen",
                "is_correct_answer"=>false
            ],
            //--5
            [
                "question_id"=>10,
                "options"=>"Dog",
                "is_correct_answer"=>false
            ],
            [
                "question_id"=>10,
                "options"=>"Cow",
                "is_correct_answer"=>false
            ],
            [
                "question_id"=>10,
                "options"=>"Cat",
                "is_correct_answer"=>true
            ],
            [
                "question_id"=>10,
                "options"=>"Lion",
                "is_correct_answer"=>false
            ],
        ];
        //ModelsQuestionOptions::insert($options2);
        foreach($options2 as $option){
            ModelsQuestionOptions::create($option);
        }
    }
}
