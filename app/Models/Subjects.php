<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Subjects extends Model
{
    public function exam(): BelongsTo
    {
        return $this->belongsTo(ExamMaster::class, 'subject_id', 'id');
    }


    public function class()
    {
        return $this->hasOne(ClassMaster::class, 'id', 'class_id');
    }
}
