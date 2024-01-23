<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('subcategory_id');
            $table->unsignedBigInteger('region_id');
            $table->unsignedBigInteger('country_id');
            $table->string('title');
            $table->string('thumbnail');
            $table->longText('description')->nullable();
            $table->string('user_level');
            $table->float('each_worker_earn');
            $table->integer('total_worker_needed');
            $table->integer('estimated_approval_day');
            $table->longText('steps');
            $table->longText('proofs');
            $table->longText('proof_types');
            $table->float('total_cost');
            $table->enum('status', array('pending', 'success', 'rejected'))->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
