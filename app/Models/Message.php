<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    public function messageWithUserRelation() {
        return $this->hasOne(User::class, 'id', 'reciver_id');
    }

    public function messageWithUserRelation2() {
        return $this->hasOne(User::class, 'id', 'sender_id');
    }
}
