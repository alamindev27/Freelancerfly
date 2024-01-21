<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteMeta extends Model
{
    use HasFactory;
    protected $fillable = [
        'meta_title',
        'focus_keywords',
        'meta_keywords',
        'meta_description',
    ];
}
