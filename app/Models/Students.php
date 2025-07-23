<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Request;
use Illuminate\Database\Eloquent\Relations\HasOne;
class Students extends Model
{
    public function classMaster(): HasMany
    {
        return $this->hasMany(ClassMaster::class, 'id', 'class_id');
    }

}
