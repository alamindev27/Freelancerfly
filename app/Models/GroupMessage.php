<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupMessage extends Model
{
    use HasFactory;

    public function groupMessageWithUserRelation() {
        return $this->hasOne(User::class, 'id', 'reciver_id');
    }

    public function groupMessageWithUserRelation2() {
        return $this->hasOne(User::class, 'id', 'sender_id');
    }
}
