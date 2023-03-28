<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => 'Administrator',
            'email' => 'admin@ksu.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => 'remember_token',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $this->call([
            AreaSeeder::class,
        ]);
    }
}
