<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ExamMaster extends Model
{
    public function subject(): HasMany
    {
        return $this->hasMany(Subjects::class, 'exam_id', 'id');
    }

    public function sub()
    {
        return $this->hasOne(Subjects::class, 'id', 'exam_id');
    }
}
