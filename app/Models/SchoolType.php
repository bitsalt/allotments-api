<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolType extends Model
{
    use HasFactory;

    public $table = 'school_type';

    protected $fillable = [
        'school_year',
        'school_type',
        'school_type_name',
        'override1',
    ];
}
