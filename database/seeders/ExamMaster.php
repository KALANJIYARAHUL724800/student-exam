<?php

namespace Database\Seeders;

use App\Models\ExamMaster as ModelsExamMaster;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExamMaster extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $exam_master = [
        [
            "exam_type"=>"quarterly",
        ],
        [
            "exam_type"=>"halfyearly"
        ],
        [
            "exam_type"=>"annually"
        ]
       ];
       foreach($exam_master as $exam){
           ModelsExamMaster::create($exam);
       }
    }
}