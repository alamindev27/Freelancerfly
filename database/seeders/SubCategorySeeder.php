<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sub_categories')->insert([
            [
                'category_id' => 1,
                'subcategory_name' => 'Sub-Category 1',
                'slug' => 'category-1',
                'rate' => rand(1,5),
                'created_at' => Carbon::now()
            ],[
                'category_id' => 1,
                'subcategory_name' => 'Sub-Category 2',
                'slug' => 'category-2',
                'rate' => rand(1,5),
                'created_at' => Carbon::now()
            ],[
                'category_id' => 1,
                'subcategory_name' => 'Sub-Category 3',
                'slug' => 'category-3',
                'rate' => rand(1,5),
                'created_at' => Carbon::now()
            ],[
                'category_id' => 1,
                'subcategory_name' => 'Sub-Category 4',
                'slug' => 'category-4',
                'rate' => rand(1,5),
                'created_at' => Carbon::now()
            ],[
                'category_id' => 1,
                'subcategory_name' => 'Sub-Category 5',
                'slug' => 'category-5',
                'rate' => rand(1,5),
                'created_at' => Carbon::now()
            ],[
                'category_id' => 2,
                'subcategory_name' => 'Sub-Category 6',
                'slug' => 'category-6',
                'rate' => rand(1,5),
                'created_at' => Carbon::now()
            ],[
                'category_id' => 2,
                'subcategory_name' => 'Sub-Category 7',
                'slug' => 'category-7',
                'rate' => rand(1,5),
                'created_at' => Carbon::now()
            ],[
                'category_id' => 2,
                'subcategory_name' => 'Sub-Category 8',
                'slug' => 'category-8',
                'rate' => rand(1,5),
                'created_at' => Carbon::now()
            ],[
                'category_id' => 2,
                'subcategory_name' => 'Sub-Category 9',
                'slug' => 'category-9',
                'rate' => rand(1,5),
                'created_at' => Carbon::now()
            ],[
                'category_id' => 2,
                'subcategory_name' => 'Sub-Category 10',
                'slug' => 'category-10',
                'rate' => rand(1,5),
                'created_at' => Carbon::now()
            ],[
                'category_id' => 3,
                'subcategory_name' => 'Sub-Category 11',
                'slug' => 'category-11',
                'rate' => rand(1,5),
                'created_at' => Carbon::now()
            ],[
                'category_id' => 3,
                'subcategory_name' => 'Sub-Category 12',
                'slug' => 'category-12',
                'rate' => rand(1,5),
                'created_at' => Carbon::now()
            ],[
                'category_id' => 3,
                'subcategory_name' => 'Sub-Category 13',
                'slug' => 'category-13',
                'rate' => rand(1,5),
                'created_at' => Carbon::now()
            ],
        ]);
    }
}
