<?php

namespace App\Models;

use App\Traits\GradeList;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class School extends Model
{
    use HasFactory;

    protected $fillable = [
        'school_num',
        'school_year',
        'school_name',
        'magnet_ind',
        'restart_ind',
        'school_grade_level_id',
        'school_type_id',
        'has_schedule_assistance',
        'schedule_assistance_hours',
        'grandfathered',
        'grandfathered_moe',
    ];


    /**
     * Add to parent toArray()
     * @return array
     */
    public function toArray()
    {
        $parentArr = parent::toArray();
        $parentArr['gradesList'] = SchoolGrade::getGradesList($parentArr['id']);
        return $parentArr;
    }


    /**
     * Getter for all the fields of a school object. Maybe use instead of a lot of getters?
     * @param $field
     * @return string
     */
    public function getSchoolField($field)
    {
        if (isset($this->$field)) {
            return $this->$field;
        }
        return 'Unavailable';
    }

}
