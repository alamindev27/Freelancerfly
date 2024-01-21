<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            SettingSeeder::class,
            SiteMetaSeeder::class,
            AboutSeeder::class,
            ResponsibilityAndStepSeeder::class,
            BannerSeeder::class,
            PageSeeder::class,
            RegionSeeder::class,
            CountrySeeder::class,
            CategorySeeder::class,
            SubCategorySeeder::class,
        ]);
    }
}
