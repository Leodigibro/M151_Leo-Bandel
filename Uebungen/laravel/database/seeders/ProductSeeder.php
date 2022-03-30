<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Milchschnitte',
            'price' => 1.30,
            'details' => 'Milch & Schnitte',
            'manual' => 'Milch & Schnitte & Rabatt',
            'image' => 'images\Milchschnitte.jpg'
        ]);
        Product::create([
            'name' => 'Döner',
            'price' => 9.00,
            'details' => 'Mit Poulet',
            'manual' => 'Mit Poulet im Taschenbrot',
            'image' => 'images\Doener.jpg'
        ]);
    }
    
}
