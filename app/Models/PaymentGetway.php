<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentGetway extends Model
{
    use HasFactory;
    protected $fillable = [
        'account_name',
        'account_number',
        'account_type',
        'logo',
        'charge',
        'link',
    ];
}
