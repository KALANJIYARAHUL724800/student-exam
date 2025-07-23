<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentOverallMarks extends Model
{
    protected $fillable = ['user_id', 'user_id', 'subject_id', 'marks', 'email_sent_at'];
}
