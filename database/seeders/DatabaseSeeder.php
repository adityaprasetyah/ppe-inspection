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

        \App\Models\User::factory()->create([
            'name' => 'Safety Officer',
            'email' => 'safety@ksu.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => 'remember_token',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        \App\Models\User::factory()->create([
            'name' => 'User',
            'email' => 'user@ksu.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => 'remember_token',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        \App\Models\ppe::create([
            'id' => 1,
            'total' => '100',
            'total_warehouse' => '50',
            'total_onsite' => '50',
            'body_harness' => '30',
            'safety_helmet' => '10',
            'kap_las' => '10',
            'face_shield' => '10',
            'sarung_tangan_las' => '10',
            'earplug' => '10',
            'safety_shoes' => '10',
            'vest' => '10',
            'created_at' => now(),
        ]);

        $this->call([
            AreaSeeder::class,
        ]);
    }
}
