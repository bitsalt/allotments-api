<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormulasMeta extends Model
{
    use HasFactory;

    public $table = 'allot_formulas_meta';

    protected $fillable = [
        'description',
        'salary_nonsalary_ind',
    ];
}
