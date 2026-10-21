<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Gallery;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menggunakan insert untuk memasukkan banyak data sekaligus
        Gallery::insert([
            [
                'title' => 'Sunset Overdrive',
                'artist' => 'John Doe',
                'resolution' => '1920x1080',
                'price' => '49.99',
                'image' => 'sunset_overdrive.jpg',
                'software_used' => 'Adobe Photoshop',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Mountain Majesty',
                'artist' => 'Jane Smith',
                'resolution' => '3840x2160',
                'price' => '79.99',
                'image' => 'mountain_majesty.jpg',
                'software_used' => 'Corel Painter',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Urban Jungle',
                'artist' => 'Alice Johnson',
                'resolution' => '2560x1440',
                'price' => '59.99',
                'image' => 'urban_jungle.jpg',
                'software_used' => 'Procreate',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Ocean Breeze',
                'artist' => 'Bob Brown',
                'resolution' => '1920x1080',
                'price' => '39.99',
                'image' => 'ocean_breeze.jpg',
                'software_used' => 'Adobe Illustrator',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}