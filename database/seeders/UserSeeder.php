<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Factories\UserFactory;

class UserSeeder extends Seeder
{
    /**
     * Run the database user seeds.
     */
    static public function run(): void
    {
        print('UserSeeder success');
        UserFactory::new()->count(10)->create();
    }
}
