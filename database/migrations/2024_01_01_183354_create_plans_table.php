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
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->string('plan_name');
            $table->string('job_post_fee');
            $table->integer('withdraw_fee');
            $table->integer('post_bost_duration');
            $table->integer('daily_spin_limit');
            $table->integer('deposit_refer_commission');
            $table->integer('task_commission');
            $table->string('geen_mark_badge')->nullable();
            $table->string('profile_mark_badge')->nullable();
            $table->string('live_phone_call_support')->nullable();
            $table->float('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plans');
    }
};
