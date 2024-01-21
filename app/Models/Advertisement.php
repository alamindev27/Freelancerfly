<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    use HasFactory;
    protected $fillable = [
        'status'
    ];

    public function advertisementWithUserRelation() {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
