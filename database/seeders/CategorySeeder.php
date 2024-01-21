<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'category_name' => 'Category 1',
                'slug' => 'category-1',
                'created_at' => Carbon::now()
            ],[
                'category_name' => 'Category 2',
                'slug' => 'category-2',
                'created_at' => Carbon::now()
            ],[
                'category_name' => 'Category 3',
                'slug' => 'category-3',
                'created_at' => Carbon::now()
            ],[
                'category_name' => 'Category 4',
                'slug' => 'category-4',
                'created_at' => Carbon::now()
            ],[
                'category_name' => 'Category 5',
                'slug' => 'category-5',
                'created_at' => Carbon::now()
            ],
        ]);
    }
}
