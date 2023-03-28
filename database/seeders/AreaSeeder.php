<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $areas = [
            [
                'id' => 1,
                'name' => 'Pastilator',
                'slug' => 'pastilator',
            ],
            [
                'id' => 2,
                'name' => 'Utility',
                'slug' => 'utility',
            ],
            [
                'id' => 3,
                'name' => 'MCT',
                'slug' => 'mct',
            ],
            [
                'id' => 4,
                'name' => 'FAL',
                'slug' => 'fal',
            ],
            [
                'id' => 5,
                'name' => 'Texturing',
                'slug' => 'texturing',
            ],
        ];

        foreach ($areas as $area) {
            \App\Models\Area::create($area);
        }
    }
}
