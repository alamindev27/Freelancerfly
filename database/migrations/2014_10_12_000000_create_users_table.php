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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->integer('profile_id')->nullable();
            $table->string('name');
            $table->string('title')->nullable();
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('role', array('admin', 'user', 'client'))->default('user');
            $table->float('coin')->default(0);
            $table->integer('lavel')->default(0);
            $table->integer('total_refer')->default(0);
            $table->enum('status', array('active', 'deactive'))->default('active');
            $table->string('avatar')->default('assets/uploads/avatar.png');
            $table->longText('overview')->nullable();
            $table->longText('skill_and_expertise')->nullable();
            $table->integer('point')->default(0);
            $table->float('main_balance')->default(0);
            $table->float('earning_balance')->default(0);
            $table->float('deposit_balance')->default(0);
            $table->string('facebook')->nullable();
            $table->string('language')->nullable();
            $table->string('experience')->nullable();
            $table->string('age')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('postcode')->nullable();
            $table->string('full_address')->nullable();
            $table->enum('verify_status', array('verified', 'unverified'))->default('unverified');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
