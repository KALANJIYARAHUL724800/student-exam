<?php

namespace Database\Seeders;

use App\Models\ClassMaster as ModelsClassMaster;
use Illuminate\Database\Seeder;

class ClassMaster extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $class_master = [
        ["class_name"=>1],
        ["class_name"=>2],
        ["class_name"=>3],
        ["class_name"=>4],
        ["class_name"=>5],
       ];
       foreach($class_master as $class){
           ModelsClassMaster::create($class);
       }
}
}
