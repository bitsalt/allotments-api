<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    use HasFactory;

    protected $table = 'membership';

    protected $fillable = [
        'school_id',
        'school_year',
        'day_proj_plan_ind',
        'grade',
        'studentcount',
    ];
}
