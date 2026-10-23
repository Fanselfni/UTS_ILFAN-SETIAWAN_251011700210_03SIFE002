<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Craft;
use Illuminate\Support\Facades\DB;

class CraftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $crafts = [
            [
                'name' => 'Handmade Wooden Bowl',
                'artisan' => 'John Doe',
                'material' => 'Wood',
                'price' => 25000.00,
                'description' => 'A beautifully handcrafted wooden bowl made from sustainable wood.',
                'image' => 'craft1.jpg',
            ],
            [   
                'name' => 'Ceramic Vase',
                'artisan' => 'Jane Smith',
                'material' => 'Ceramic',
                'price' => 49000.00,
                'description' => 'A delicate ceramic vase perfect for displaying fresh flowers.',
                'image' => 'craft2.jpg',
            ],
            [
                'name' => 'Woven Basket',
                'artisan' => 'Emily Johnson',
                'material' => 'Natural Fibers',
                'price' => 19000.00,
                'description' => 'A sturdy woven basket ideal for storage or decoration.',
                'image' => 'craft3.jpg',
            ],
            [
                'name' => 'Hand-Painted Canvas',
                'artisan' => 'Michael Brown',
                'material' => 'Canvas and Acrylic Paint',
                'price' => 79000.00,
                'description' => 'A vibrant hand-painted canvas that adds color to any room.',
                'image' => 'craft4.jpg',
            ],
            [
                'name' => 'Leather Wallet',
                'artisan' => 'Sarah Wilson',
                'material' => 'Genuine Leather',
                'price' => 39000.00,
                'description' => 'A sleek and durable leather wallet with multiple compartments.',
                'image' => 'craft5.jpg',
            ],
            [
                'name' => 'Glass Pendant Necklace',
                'artisan' => 'David Lee',
                'material' => 'Glass and Metal',
                'price' => 24000.00,
                'description' => 'A unique glass pendant necklace that makes a statement.',
                'image' => 'craft6.jpg',
            ],
            [
                'name' => 'Hand-Knitted Scarf',
                'artisan' => 'Laura Martinez',
                'material' => 'Wool',
                'price' => 34000.00,
                'description' => 'A cozy hand-knitted scarf perfect for chilly weather.',
                'image' => 'craft7.jpg',
            ],
            [
                'name' => 'Stone Carving Sculpture',
                'artisan' => 'Robert Garcia',
                'material' => 'Stone',
                'price' => 99000.00,
                'description' => 'An intricate stone carving sculpture that showcases craftsmanship.',
                'image' => 'craft8.jpg',
            ],
            [
                'name' => 'Handmade Ceramic Mug',
                'artisan' => 'Sophia Anderson',
                'material' => 'Ceramic',
                'price' => 14000.00,
                'description' => 'A charming handmade ceramic mug perfect for your morning coffee.',
                'image' => 'craft9.jpg',
            ],
            [
                'name' => 'Woven Wall Hanging',
                'artisan' => 'Daniel Thomas',
                'material' => 'Cotton and Wool',
                'price' => 59000.00,
                'description' => 'A beautiful woven wall hanging that adds texture to any space.',
                'image' => 'craft10.jpg',
            ],
        ];

        foreach ($crafts as $craft) {
            Craft::create($craft);
        }
    }
}
