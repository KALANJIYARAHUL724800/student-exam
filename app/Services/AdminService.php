<?php
namespace App\Services;
use App\Models\ClassMaster;
class AdminService
{

    public function getClassNames()
    {
        return ClassMaster::select('id', 'class_name')->get();
    }
}
