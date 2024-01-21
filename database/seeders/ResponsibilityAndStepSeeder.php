<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResponsibilityAndStepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('responsibility_and_steps')->insert([
            [
                'heading' => 'Follow our steps, it s our responsibility to protect you.',
                'text' => 'Post a job to tell us about your project. We ll quickly match you with the right freelancers.',
                'check_1' => 'Trusted & Quality Job',
                'check_2' => 'International Job',
                'check_3' => 'No Extra Charge',
                'check_4' => 'Top Companies',
                'step_one_title' => 'Register Your Account',
                'step_one_text' => 'You need to create an account if you want to earn income by working and getting others to work for you.',
                'step_one_icon' => 'assets/frontend/user/images/work-process/icon1.png',
                'step_two_title' => 'Search Your Job',
                'step_two_text' => 'You can search and find jobs according to the content you need and your skills.',
                'step_two_icon' => 'assets/frontend/user/images/work-process/icon4.png',
                'step_three_title' => 'Apply For Dream Job',
                'step_three_text' => 'You can start earning by applying your skills to complete jobs.',
                'step_three_icon' => 'assets/frontend/user/images/work-process/icon3.png',
                'step_four_title' => 'Upload Your Resume',
                'step_four_text' => 'By uploading your requirements, you can get the work done by skilled people.',
                'step_four_icon' => 'assets/frontend/user/images/work-process/icon3.png',
                'created_at' => Carbon::now()
            ]
        ]);
    }
}
