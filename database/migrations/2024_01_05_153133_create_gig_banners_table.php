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
        Schema::create('gig_banners', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('gig_id');
            $table->string('banner');
            $table->timestamps();
            $table->foreign('gig_id')
                    ->references('id')->on('gigs')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gig_banners');
    }
};
