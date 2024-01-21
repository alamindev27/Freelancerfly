<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResponsibilityAndStep extends Model
{
    use HasFactory;
    protected $fillable = [
        'heading',
        'text',
        'check_1',
        'check_2',
        'check_3',
        'check_4',
        'step_one_title',
        'step_one_text',
        'step_one_icon',
        'step_two_title',
        'step_two_text',
        'step_two_icon',
        'step_three_title',
        'step_three_text',
        'step_three_icon',
        'step_four_title',
        'step_four_text',
        'step_four_icon',
    ];
}
