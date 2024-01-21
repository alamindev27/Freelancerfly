<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pages')->insert([
            [
                'heading' => 'Terms Condition',
                'content' => 'Welcome to #GPS_Freelancer! This agreement (“Terms & Condition”) sets out the terms and conditions that govern your relationship with us. These Terms of Use constitute a legally binding agreement made between you, whether personally or on behalf of an entity (“you”) and #GPS_Freelancer International, doing business as WMJ ("WMJ," “we," “us," or “our”), concerning your access to and use of the #GPS_Freelancer website as well as any other media form, media channel, mobile website or mobile application related, linked, or otherwise connected thereto (collectively, the “Site”). You agree that by accessing the Site, you have read, understood, and agreed to be bound by all of these Terms of Use. IF YOU DO NOT AGREE WITH ALL OF THESE TERMS OF USE, THEN YOU ARE EXPRESSLY PROHIBITED FROM USING THE SITE AND YOU MUST DISCONTINUE USE IMMEDIATELY.',
                'created_at' => Carbon::now()
            ],[
                'heading' => 'Privacy Policy',
                'content' => 'Welcome to #GPS_Freelancer, a multi-service online platform operated by #GPS_Freelancer and its affiliates. By using our website and platform, you acknowledge that you have read, understood, and agree to our Privacy Policy. We reserve the right to modify this Policy at any time without notice, and your continued use of the Service after any changes constitutes your acceptance of the new Privacy Policy.',
                'created_at' => Carbon::now()
            ],[
                'heading' => 'Refund Policy',
                'content' => 'You acknowledge #GPS_Freelancer is not a bank, money service business (MSB), money storage system, or a demand deposit institution. Purchases are credited as deposits for the purpose of spending on freelance work. You may request a refund of the unspent principal amount of your transaction (less applicable transaction fees) within fourteen (14) days of the date that we receive all necessary information and payment for funds and services. To request a refund, you may contact us http://www.gpsfreelancer.com/contact At this time no refunds are possible via bkash, nagad. In order for your Account to be activated, we must have your consent to provide access to required disclosures in electronic format. If you do not consent to electronic disclosure of these documents, then you may not participate in any of our Services. Your consent applies to all of the documents we provide to you electronically in connection with our Services, including periodic statements and notices.',
                'created_at' => Carbon::now()
            ],[
                'heading' => 'Support',
                'content' => 'You acknowledge #GPS_Freelancer is not a bank, money service business (MSB), money storage system, or a demand deposit institution. Purchases are credited as deposits for the purpose of spending on freelance work. You may request a refund of the unspent principal amount of your transaction (less applicable transaction fees) within fourteen (14) days of the date that we receive all necessary information and payment for funds and services. To request a refund, you may contact us http://www.gpsfreelancer.com/contact At this time no refunds are possible via bkash, nagad. In order for your Account to be activated, we must have your consent to provide access to required disclosures in electronic format. If you do not consent to electronic disclosure of these documents, then you may not participate in any of our Services. Your consent applies to all of the documents we provide to you electronically in connection with our Services, including periodic statements and notices.',
                'created_at' => Carbon::now()
            ]
        ]);
    }
}
