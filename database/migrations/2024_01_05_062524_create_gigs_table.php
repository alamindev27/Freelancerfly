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
        Schema::create('gigs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('gigId');
            $table->unsignedBigInteger('user_id');
            $table->string('title');
            $table->longText('description');
            $table->longText('tags');

            $table->string('basic_package_name');
            $table->float('basic_price');
            $table->integer('basic_delivery_time');
            $table->string('basic_unlimited_revision')->nullable();
            $table->integer('basic_total_revision')->nullable();

            $table->string('standard_package_name');
            $table->float('standard_price');
            $table->integer('standard_delivery_time');
            $table->string('standard_unlimited_revision')->nullable();
            $table->integer('standard_total_revision')->nullable();

            $table->string('premium_package_name');
            $table->float('premium_price');
            $table->integer('premium_delivery_time');
            $table->string('premium_unlimited_revision')->nullable();
            $table->integer('premium_total_revision')->nullable();
            $table->integer('total_order')->default(0);
            $table->enum('status', array('pending', 'success', 'rejected'))->default('pending');
            $table->integer('total_earn')->default(0);
            $table->integer('total_sale')->default(0);

            $table->timestamps();
            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gigs');
    }
};
