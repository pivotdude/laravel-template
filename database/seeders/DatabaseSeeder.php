<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Factories\UserFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Here run all seders
     * Seed the application's database.
     */
    public function run(): void
    {
        \Database\Seeders\UserSeeder::run();
        
        // \App\Models\User::factory(10)->create(); // dont use plz
    }
}
