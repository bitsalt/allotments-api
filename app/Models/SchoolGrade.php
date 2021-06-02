<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolGrade extends Model
{
    use HasFactory;

    protected $fillable = [
        'school_id',
        'school_year',
        'grade_id',
    ];

    public static function getGradesList($schoolId) {

        return self::select('grades.id', 'grades.grade')
            ->join('grades', 'school_grades.grade_id', '=', 'grades.id')
            ->where('school_grades.school_id', '=', $schoolId)
            ->orderBy('grades.grade_order')
            ->get();
    }
}
