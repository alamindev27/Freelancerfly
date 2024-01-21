<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdraw extends Model
{
    use HasFactory;
    protected $fillable = [
        'status'
    ];

    public function withdrawWithUserRelation() {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function withdrawWithGetwayRelation() {
        return $this->hasOne(PaymentGetway::class, 'id', 'getway_id');
    }
}
