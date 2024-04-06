<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Announcement;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create([
            'name' => 'A-team',
            'email' => 'ateam@example.it',
            'password' => 'ateam123',
        ]);

        User::factory()->create([
            'name' => 'John Hannibal Smith ',
            'email' => 'hannibal@example.it',
            'password' => 'ateam123',
        ]);

        User::factory(25)->create();


        Announcement::factory(2)->create();

        

      
    }

    
}