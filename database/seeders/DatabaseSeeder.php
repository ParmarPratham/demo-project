<?php

namespace Database\Seeders;

use App\Models\Setting;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
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
