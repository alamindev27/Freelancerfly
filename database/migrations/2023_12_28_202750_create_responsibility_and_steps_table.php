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
        Schema::create('responsibility_and_steps', function (Blueprint $table) {
            $table->id();
            $table->string('heading');
            $table->string('text');
            $table->string('check_1');
            $table->string('check_2');
            $table->string('check_3');
            $table->string('check_4');
            $table->string('step_one_title');
            $table->string('step_one_text');
            $table->string('step_one_icon');
            $table->string('step_two_title');
            $table->string('step_two_text');
            $table->string('step_two_icon');
            $table->string('step_three_title');
            $table->string('step_three_text');
            $table->string('step_three_icon');
            $table->string('step_four_title');
            $table->string('step_four_text');
            $table->string('step_four_icon');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('responsibility_and_steps');
    }
};
