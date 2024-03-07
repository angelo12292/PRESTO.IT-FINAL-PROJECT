<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Announcement;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        \App\Models\User::factory()->create([
            'name' => 'A-team',
            'email' => 'ateam@example.it',
            'password' => 'ateam123',
        ]);

        \App\Models\User::factory(25)->create();


        \App\Models\Announcement::factory(40)->create();

        

      
    }

    
}