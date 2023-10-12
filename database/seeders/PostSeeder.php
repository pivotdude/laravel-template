<?php

namespace Database\Seeders;

use App\Models\Post;
use Database\Factories\PostFactory;
use Database\Factories\UserFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    static public function run(): void
    {
        print('PostSeeder success');
        PostFactory::new()->count(10)->create();
    }
}
