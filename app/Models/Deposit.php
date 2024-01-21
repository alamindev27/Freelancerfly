<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    use HasFactory;
    protected $fillable = [
        'status'
    ];

    public function depositWithUserRelation() {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function depositWithGetwayRelation() {
        return $this->hasOne(PaymentGetway::class, 'id', 'getway_id');
    }
}
