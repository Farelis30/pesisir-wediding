<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Banner;
use App\Models\Package;
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
        User::factory(200)->create();

        User::factory()->create([
            'name' => 'Farel Yudistira',
            'email' => 'farelyudistira01@gmail.com',
            'password' => bcrypt('password123'),
            'role' => 'user'
        ]);

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password123'),
            'role' => 'admin'
        ]);

        Article::factory(100)->create();

        Banner::factory(5)->create();

        Package::factory(10)->create();
    }
}
