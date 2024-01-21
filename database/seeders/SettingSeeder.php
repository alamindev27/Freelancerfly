<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('settings')->insert([
            [
                'author_name' => 'Admin',
                'site_name' => 'Techzen',
                'site_logo' => 'assets/uploads/default-logo.png',
                'site_favicon' => 'assets/uploads/default-favicon.png',
                'created_at' => Carbon::now()
            ]
        ]);
    }
}
