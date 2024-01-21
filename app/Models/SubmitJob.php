<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubmitJob extends Model
{
    use HasFactory;
    protected $fillable = [
        'status'
    ];

    public function submitJobWithUserRelation() {
        return $this->hasOne(User::class, 'id', 'worker_id');
    }

    public function submitJobWithJobRelation() {
        return $this->hasOne(Job::class, 'id', 'job_id');
    }
}
