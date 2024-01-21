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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('author_name');
            $table->string('site_name');
            $table->string('site_logo');
            $table->string('site_favicon');
            $table->integer('refer_commission')->default(0);
            $table->string('footer_message')->default('Your safety is our responsibility.');
            $table->string('footer_address')->default('Dhaka, Bangladesh');
            $table->string('footer_email')->default('gpsfreelancerofficial@gmail.com');
            $table->string('footer_number')->default('+8801976091243');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
