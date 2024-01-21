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
        Schema::create('payment_getways', function (Blueprint $table) {
            $table->id();
            $table->string('account_name');
            $table->string('account_number');
            $table->enum('account_type', array('personal', 'agent'))->default('personal');
            $table->string('logo');
            // $table->enum('deposit', array('yes', 'no'));
            // $table->enum('withdraw', array('yes', 'no'));
            $table->integer('charge')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_getways');
    }
};
