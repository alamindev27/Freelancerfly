<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('abouts')->insert([
            [
                'title' => 'Build your personal account profile',
                'description' => 'Identify your skills and Pursue remote work opportunities, GPS Freelancer offers the flexibility to work remotely, which can open up a world of possibilities.Focusing on a specific area can help you stand out and attract clients who are looking for your particular expertise.',
                'image' => 'assets/uploads/default-about-image.png',
                'created_at' => Carbon::now()
            ]
        ]);
    }
}
