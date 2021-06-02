<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllotGradeLevel extends Model
{
    use HasFactory;

    protected $fillable = [
        'allotment_type_id',
        'school_year',
        'grade_level_id',
    ];
}
