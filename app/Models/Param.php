<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Param extends Model
{
    use HasFactory;

    public $table = 'newparms';

    protected $fillable = [
        'param_name',
        'param_num',
    ];
}
