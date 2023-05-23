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
            'total' => '0',
            'warehouse_total' => '100',
            'warehouse_body_harness' => '30',
            'warehouse_safety_helmet' => '10',
            'warehouse_kap_las' => '10',
            'warehouse_face_shield' => '10',
            'warehouse_sarung_tangan_las' => '10',
            'warehouse_earplug' => '10',
            'warehouse_safety_shoes' => '10',
            'warehouse_vest' => '10',
            'onsite_total' => '100',
            'onsite_body_harness' => '30',
            'onsite_safety_helmet' => '10',
            'onsite_kap_las' => '10',
            'onsite_face_shield' => '10',
            'onsite_sarung_tangan_las' => '10',
            'onsite_earplug' => '10',
            'onsite_safety_shoes' => '10',
            'onsite_vest' => '10',
            'created_at' => now(),
        ]);

        $this->call([
            AreaSeeder::class,
        ]);
    }
}
