<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('countries')->insert([
            [
                'region_id' => 1,
                'name' => 'Afghanistan',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 1,
                'name' => 'Armenia',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 1,
                'name' => 'Azerbaijan',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 1,
                'name' => 'Bahrain',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 1,
                'name' => 'Bangladesh',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 1,
                'name' => 'Bhutan',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 1,
                'name' => 'Brunei',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 1,
                'name' => 'Cambodia',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 1,
                'name' => 'China',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 1,
                'name' => 'Cyprus',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 1,
                'name' => 'East Timor',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 1,
                'name' => 'Georgia',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 1,
                'name' => 'India',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 1,
                'name' => 'Indonesia',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 1,
                'name' => 'Iran',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 1,
                'name' => 'Iraq',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 1,
                'name' => 'Israel',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 1,
                'name' => 'Japan',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 1,
                'name' => 'Jordan',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 1,
                'name' => 'Kazakhstan',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 1,
                'name' => 'North Korea',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 1,
                'name' => 'South Korea',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 1,
                'name' => 'Kuwait',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 1,
                'name' => 'Kyrgyzstan',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 1,
                'name' => 'Laos',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 1,
                'name' => 'Lebanon',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 1,
                'name' => 'Malaysia',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 1,
                'name' => 'Maldives',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 1,
                'name' => 'Mongolia',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 1,
                'name' => 'Myanmar',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 1,
                'name' => 'Nepal',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 1,
                'name' => 'Oman',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 1,
                'name' => 'Pakistan',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 1,
                'name' => 'Philippines',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 1,
                'name' => 'Qatar',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 1,
                'name' => 'Russia',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 1,
                'name' => 'Saudi Arabia',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 1,
                'name' => 'Singapore',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 1,
                'name' => 'Sri Lanka',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 1,
                'name' => 'Syria',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 1,
                'name' => 'Taiwan',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 1,
                'name' => 'Tajikistan',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 1,
                'name' => 'Thailand',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 1,
                'name' => 'Turkey',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 1,
                'name' => 'Turkmenistan',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 1,
                'name' => 'United Arab Emirates',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 1,
                'name' => 'Uzbekistan',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 1,
                'name' => 'Vietnam',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 1,
                'name' => 'Yemen',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 2,
                'name' => 'Algeria',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 2,
                'name' => 'Angola',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 2,
                'name' => 'Benin',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 2,
                'name' => 'Botswana',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 2,
                'name' => 'Burkina Faso',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 2,
                'name' => 'Burundi',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 2,
                'name' => 'Cameroon',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 2,
                'name' => 'Cape Verde',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 2,
                'name' => 'Central African Republic',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 2,
                'name' => 'Chad',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 2,
                'name' => 'Comoros',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 2,
                'name' => 'Congo',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 2,
                'name' => 'Democratic Republic of the Congo',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 2,
                'name' => 'Djibouti',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 2,
                'name' => 'Egypt',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 2,
                'name' => 'Equatorial Guinea',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 2,
                'name' => 'Eritrea',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 2,
                'name' => 'Ethiopia',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 2,
                'name' => 'Gabon',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 2,
                'name' => 'Gambia The',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 2,
                'name' => 'Ghana',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 2,
                'name' => 'Guinea',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 2,
                'name' => 'Guinea-Bissau',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 2,
                'name' => 'Kenya',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 2,
                'name' => 'Lesotho',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 2,
                'name' => 'Liberia',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 2,
                'name' => 'Libya',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 2,
                'name' => 'Madagascar',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 2,
                'name' => 'Malawi',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 2,
                'name' => 'Mali',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 2,
                'name' => 'Mauritania',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 2,
                'name' => 'Mauritius',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 2,
                'name' => 'Morocco',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 2,
                'name' => 'Mozambique',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 2,
                'name' => 'Namibia',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 2,
                'name' => 'Niger',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 2,
                'name' => 'Nigeria',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 2,
                'name' => 'Rwanda',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 2,
                'name' => 'Sao Tome and Principe',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 2,
                'name' => 'Senegal',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 2,
                'name' => 'Seychelles',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 2,
                'name' => 'Sierra Leone',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 2,
                'name' => 'Somalia',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 2,
                'name' => 'South Africa',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 2,
                'name' => 'South Sudan',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 2,
                'name' => 'Sudan',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 2,
                'name' => 'Tanzania',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 2,
                'name' => 'Togo',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 2,
                'name' => 'Tunisia',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 2,
                'name' => 'Uganda',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 2,
                'name' => 'Zambia',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 2,
                'name' => 'Zimbabwe',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 3,
                'name' => 'Albania',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 3,
                'name' => 'Andorra',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 3,
                'name' => 'Armenia',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 3,
                'name' => 'Austria',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 3,
                'name' => 'Azerbaijan',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 3,
                'name' => 'Belarus',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 3,
                'name' => 'Belgium',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 3,
                'name' => 'Bosnia and Herzegovina',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 3,
                'name' => 'Bulgaria',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 3,
                'name' => 'Croatia',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 3,
                'name' => 'Cyprus',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 3,
                'name' => 'Czech Republic',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 3,
                'name' => 'Denmark',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 3,
                'name' => 'Estonia',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 3,
                'name' => 'Finland',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 3,
                'name' => 'France',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 3,
                'name' => 'Georgia',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 3,
                'name' => 'Germany',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 3,
                'name' => 'Greece',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 3,
                'name' => 'Hungary',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 3,
                'name' => 'Iceland',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 3,
                'name' => 'Ireland',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 3,
                'name' => 'Italy',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 3,
                'name' => 'Kazakhstan',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 3,
                'name' => 'Latvia',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 3,
                'name' => 'Liechtenstein',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 3,
                'name' => 'Lithuania',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 3,
                'name' => 'Luxembourg',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 3,
                'name' => 'Macedonia',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 3,
                'name' => 'Malta',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 3,
                'name' => 'Moldova',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 3,
                'name' => 'Monaco',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 3,
                'name' => 'Montenegro',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 3,
                'name' => 'Netherlands',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 3,
                'name' => 'Norway',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 3,
                'name' => 'Poland',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 3,
                'name' => 'Portugal',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 3,
                'name' => 'Romania',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 3,
                'name' => 'Russia',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 3,
                'name' => 'San Marino',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 3,
                'name' => 'Serbia',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 3,
                'name' => 'Slovakia',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 3,
                'name' => 'Slovenia',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 3,
                'name' => 'Spain',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 3,
                'name' => 'Sweden',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 3,
                'name' => 'Switzerland',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 3,
                'name' => 'Turkey',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 3,
                'name' => 'Ukraine',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 3,
                'name' => 'United Kingdom',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 3,
                'name' => 'Vatican City State (Holy See)',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 3,
                'name' => 'Kosovo',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 4,
                'name' => 'Antigua And Barbuda',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 4,
                'name' => 'The Bahamas',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 4,
                'name' => 'Barbados',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 4,
                'name' => 'Belize',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 4,
                'name' => 'Canada',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 4,
                'name' => 'Costa Rica',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 4,
                'name' => 'Cuba',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 4,
                'name' => 'Dominica',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 4,
                'name' => 'Dominican Republic',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 4,
                'name' => 'El Salvador',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 4,
                'name' => 'Grenada',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 4,
                'name' => 'Guatemala',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 4,
                'name' => 'Haiti',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 4,
                'name' => 'Honduras',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 4,
                'name' => 'Jamaica',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 4,
                'name' => 'Mexico',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 4,
                'name' => 'Nicaragua',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 4,
                'name' => 'Panama',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 4,
                'name' => 'Saint Kitts And Nevis',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 4,
                'name' => 'Saint Lucia',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 4,
                'name' => 'Saint Vincent And The Grenadines',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 4,
                'name' => 'Trinidad And Tobago',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 4,
                'name' => 'United States',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 5,
                'name' => 'Australia',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 5,
                'name' => 'Fiji Islands',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 5,
                'name' => 'Kiribati',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 5,
                'name' => 'Marshall Islands',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 5,
                'name' => 'Micronesia',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 5,
                'name' => 'Nauru',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 5,
                'name' => 'New Zealand',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 5,
                'name' => 'Palau',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 5,
                'name' => 'Papua new Guinea',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 5,
                'name' => 'Samoa',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 5,
                'name' => 'Solomon Islands',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 5,
                'name' => 'Tonga',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 5,
                'name' => 'Tuvalu',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 5,
                'name' => 'Vanuatu',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 6,
                'name' => 'Argentina',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 6,
                'name' => 'Bolivia',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 6,
                'name' => 'Brazil',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 6,
                'name' => 'Chile',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 6,
                'name' => 'Colombia',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 6,
                'name' => 'Ecuador',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 6,
                'name' => 'Guyana',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 6,
                'name' => 'Paraguay',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 6,
                'name' => 'Peru',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 6,
                'name' => 'Suriname',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 6,
                'name' => 'Uruguay',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 6,
                'name' => 'Venezuela',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 7,
                'name' => 'Andorra',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 7,
                'name' => 'Austria',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 7,
                'name' => 'Belgium',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 7,
                'name' => 'Canada',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 7,
                'name' => 'Denmark',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 7,
                'name' => 'Finland',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 7,
                'name' => 'France',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 7,
                'name' => 'Germany',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 7,
                'name' => 'Greece',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 7,
                'name' => 'Iceland',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 7,
                'name' => 'Ireland',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 7,
                'name' => 'Italy',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 7,
                'name' => 'Luxembourg',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 7,
                'name' => 'Mexico',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 7,
                'name' => 'Monaco',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 7,
                'name' => 'Netherlands',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 7,
                'name' => 'Norway',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 7,
                'name' => 'Portugal',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 7,
                'name' => 'Spain',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 7,
                'name' => 'Sweden',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 7,
                'name' => 'Switzerland',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 7,
                'name' => 'United Kingdom',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 7,
                'name' => 'United States',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 8,
                'name' => 'Argentina',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 8,
                'name' => 'Belize',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 8,
                'name' => 'Bolivia',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 8,
                'name' => 'Brazil',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 8,
                'name' => 'Chile',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 8,
                'name' => 'Colombia',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 8,
                'name' => 'Costa Rica',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 8,
                'name' => 'Cuba',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 8,
                'name' => 'Dominican Republic',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 8,
                'name' => 'Ecuador',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 8,
                'name' => 'El Salvador',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 8,
                'name' => 'Guatemala',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 8,
                'name' => 'Haiti',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 8,
                'name' => 'Honduras',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 8,
                'name' => 'Mexico',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 8,
                'name' => 'Nicaragua',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 8,
                'name' => 'Panama',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 8,
                'name' => 'Paraguay',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 8,
                'name' => 'Peru',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 8,
                'name' => 'Puerto Rico',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 8,
                'name' => 'Uruguay',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 8,
                'name' => 'Venezuela',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 9,
                'name' => 'Algeria',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 9,
                'name' => 'Bahrain',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 9,
                'name' => 'Comoros',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 9,
                'name' => 'Djibouti',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 9,
                'name' => 'Egypt',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 9,
                'name' => 'Iraq',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 9,
                'name' => 'Jordan',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 9,
                'name' => 'Kuwait',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 9,
                'name' => 'Lebanon',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 9,
                'name' => 'Libya',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 9,
                'name' => 'Mauritania',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 9,
                'name' => 'Morocco',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 9,
                'name' => 'Oman',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 9,
                'name' => 'Palestinian Territory Occupied',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 9,
                'name' => 'Qatar',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 9,
                'name' => 'Saudi Arabia',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 9,
                'name' => 'Somalia',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 9,
                'name' => 'Sudan',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 9,
                'name' => 'Syria',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 9,
                'name' => 'Tunisia',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 9,
                'name' => 'United Arab Emirates',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 9,
                'name' => 'Yemen',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 10,
                'name' => 'Afghanistan',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 10,
                'name' => 'Albania',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 10,
                'name' => 'Algeria',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 10,
                'name' => 'Azerbaijan',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 10,
                'name' => 'Bahrain',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 10,
                'name' => 'Bangladesh',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 10,
                'name' => 'Brunei',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 10,
                'name' => 'Burkina Faso',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 10,
                'name' => 'Chad',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 10,
                'name' => 'Comoros',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 10,
                'name' => 'Djibouti',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 10,
                'name' => 'Egypt',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 10,
                'name' => 'Gambia The',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 10,
                'name' => 'Guinea',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 10,
                'name' => 'Guinea-Bissau',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 10,
                'name' => 'Indonesia',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 10,
                'name' => 'Iran',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 10,
                'name' => 'Iraq',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 10,
                'name' => 'Jordan',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 10,
                'name' => 'Kazakhstan',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 10,
                'name' => 'Kuwait',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 10,
                'name' => 'Kyrgyzstan',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 10,
                'name' => 'Lebanon',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 10,
                'name' => 'Libya',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 10,
                'name' => 'Malaysia',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 10,
                'name' => 'Maldives',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 10,
                'name' => 'Mali',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 10,
                'name' => 'Mauritania',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 10,
                'name' => 'Morocco',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 10,
                'name' => 'Niger',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 10,
                'name' => 'Nigeria',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 10,
                'name' => 'Oman',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 10,
                'name' => 'Pakistan',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 10,
                'name' => 'Qatar',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 10,
                'name' => 'Saudi Arabia',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 10,
                'name' => 'Senegal',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 10,
                'name' => 'Sierra Leone',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 10,
                'name' => 'Somalia',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 10,
                'name' => 'Sudan',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 10,
                'name' => 'Syria',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 10,
                'name' => 'Tajikistan',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 10,
                'name' => 'Tanzania',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 10,
                'name' => 'Tunisia',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 10,
                'name' => 'Turkey',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 10,
                'name' => 'Turkmenistan',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 10,
                'name' => 'United Arab Emirates',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 10,
                'name' => 'Uzbekistan',
                'created_at' => Carbon::now()
            ],[
                'region_id' => 10,
                'name' => 'Yemen',
                'created_at' => Carbon::now()
            ],
        ]);
    }
}
