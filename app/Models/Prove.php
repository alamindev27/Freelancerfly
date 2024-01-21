<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prove extends Model
{
    use HasFactory;
    protected $fillable = [
        'proof',
        'proof_type',
    ];
}
