<?php


namespace App\Traits;

use App\Models\Grade;

trait GradeList
{
    public static function getGradesList($schoolYear)
    {
        return Grade::where('school_year', $schoolYear)->get();

    }
}
