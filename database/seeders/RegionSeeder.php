<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('regions')->insert([
            [
                'name' => 'Asia Countries',
                'created_at' => Carbon::now()
            ],[
                'name' => 'Africa Countries',
                'created_at' => Carbon::now()
            ],[
                'name' => 'Europe Countries',
                'created_at' => Carbon::now()
            ],[
                'name' => 'North America Countries',
                'created_at' => Carbon::now()
            ],[
                'name' => 'Oceania Countries',
                'created_at' => Carbon::now()
            ],[
                'name' => 'South America Countries',
                'created_at' => Carbon::now()
            ],[
                'name' => 'USA & Western Countries',
                'created_at' => Carbon::now()
            ],[
                'name' => 'Latin America Countries',
                'created_at' => Carbon::now()
            ],[
                'name' => 'Arab Countries',
                'created_at' => Carbon::now()
            ],[
                'name' => 'Muslim Countries',
                'created_at' => Carbon::now()
            ]
        ]);
    }
}
