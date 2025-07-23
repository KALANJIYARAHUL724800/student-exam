<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    public function questionOptions()
    {
        return $this->hasMany(QuestionOptions::class, 'question_id', 'id');
    }
}