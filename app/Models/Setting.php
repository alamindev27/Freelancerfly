<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
        'author_name',
        'site_name',
        'site_logo',
        'site_favicon',
        'refer_commission',
        'footer_message',
        'footer_address',
        'footer_email',
        'footer_number',
    ];
}
