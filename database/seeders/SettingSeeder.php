<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            'email'=> 'testemail@gmail.com',
            'phone'=>'12345678',
            'insta'=>'https://instagram.com',
            'facebook'=>'https://facebook.com',
            'youtube'=>'https://youtube.com',
            'twitter'=>'https://twitter.com',
            'address'=>'150 Sheetal Park',
            'map'=>'random map link'
        ]);
    }
}
