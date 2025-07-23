<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ClassMaster extends Model
{
    protected $guarded = [];
    public function student(): BelongsTo
    {
        return $this->belongsTo(Students::class, null, 'class_id');
    }
}
