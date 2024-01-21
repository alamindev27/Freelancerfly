<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gig extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'basic_package_name',
        'basic_price',
        'basic_delivery_time',
        'basic_unlimited_revision',
        'basic_total_revision',
        'standard_package_name',
        'standard_price',
        'standard_delivery_time',
        'standard_unlimited_revision',
        'standard_total_revision',
        'premium_package_name',
        'premium_price',
        'premium_delivery_time',
        'premium_unlimited_revision',
        'premium_total_revision',
        'status',
        'total_order',
        'total_earn',
        'total_sale',
    ];

    public function gigWithUserRelation() {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
