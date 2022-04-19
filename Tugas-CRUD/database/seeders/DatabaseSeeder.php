<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Game;
use App\Models\Studio;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Studio::create([
            'code' => 'TECH',
            'name' => 'Techiro Studio',
            'address' => 'Surabaya',
            'specialty' => 'Unity3D'
        ]);
        Studio::create([
            'code' => 'KRTECH',
            'name' => 'Kesehatanmu Rek',
            'address' => 'Surabaya',
            'specialty' => 'Unity2D'
        ]);
        Game::create([
            'studio_id' => 1,
            'title' => 'Binjai Invasion',
            'deskripsi' => '3D Puzzle Game',
            'tahun' => 2021,
            'genre' => 'Puzzle'
        ]);
        Game::create([
            'studio_id' => 1,
            'title' => 'Seratonix',
            'deskripsi' => '3D Platformer Game',
            'tahun' => 2022,
            'genre' => 'Platformer'
        ]);
        Game::create([
            'studio_id' => 2,
            'title' => 'Green the Way',
            'deskripsi' => '3D Endless-Runner Game',
            'tahun' => 2020,
            'genre' => 'Casual'
        ]);
        Game::create([
            'studio_id' => 2,
            'title' => 'Dayung Sampan',
            'deskripsi' => '3D Ship-Driving Game',
            'tahun' => 2021,
            'genre' => 'Casual'
        ]);
    }
}
