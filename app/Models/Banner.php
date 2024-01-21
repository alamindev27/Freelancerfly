<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    protected $fillable = [
        'heading_part_1',
        'heading_part_2',
        'heading_part_3',
        'text',
        'image_rounded',
        'image_circle',
    ];
}
