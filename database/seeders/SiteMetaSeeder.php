<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiteMetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('site_metas')->insert([
            [
                'meta_title' => 'meta title',
                'focus_keywords' => 'keywords1,keywords2,keywords3',
                'meta_keywords' => 'keywords1,keywords2,keywords3',
                'meta_description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters',
                'created_at' => Carbon::now()
            ]
        ]);
    }
}
