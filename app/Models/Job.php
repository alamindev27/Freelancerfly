<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'category_id',
        'subcategory_id',
        'country_name',
        'title',
        'thumbnail',
        'description',
        'user_level',
        'each_worker_earn',
        'total_worker_needed',
        'estimated_approval_day',
        'feature',
        'steps',
        'proofs',
        'total_cost',
        'proof_types',
        'status'
    ];

    public function jobWithUserRelation() {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function jobWithCategoryRelation() {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    public function jobWithSubCategoryRelation() {
        return $this->hasOne(SubCategory::class, 'id', 'subcategory_id');
    }
}
