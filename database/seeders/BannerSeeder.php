<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('banners')->insert([
            [
                'heading_part_1' => 'The ',
                'heading_part_2' => 'Easiest Way',
                'heading_part_3' => 'o Get Your New Job',
                'text' => 'Find jobs, create trackable resumes and enrich your applications.',
                'image_rounded' => 'assets/frontend/user/images/main-slider/slider2/right-pic-1.jpg',
                'image_circle' => 'assets/frontend/user/images/main-slider/slider2/right-pic-2.jpg',
                'created_at' => Carbon::now()
            ]
        ]);

    }
}
