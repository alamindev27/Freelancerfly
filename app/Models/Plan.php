<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;
    protected $fillable = [
        'plan_name',
        'job_post_fee',
        'withdraw_fee',
        'post_bost_duration',
        'daily_spin_limit',
        'deposit_refer_commission',
        'task_commission',
        'geen_mark_badge',
        'profile_mark_badge',
        'live_phone_call_support',
        'price'
    ];
}
