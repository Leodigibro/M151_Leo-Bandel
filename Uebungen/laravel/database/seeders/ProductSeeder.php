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
            'name' => 'Blumentopf',
            'price' => 9.99,
            'details' => 'Bemalte Blumentöpfe',
            'manual' => 'In den Blumentopf können Sie Ihre Blumen anpflanzen. Die Kanten sind weich.',
            'image' => 'images\blumentoepfe.jpg'
        ]);
        Product::create([
            'name' => 'Gartenschere',
            'price' => 19.99,
            'details' => 'Rote Gartenschere',
            'manual' => 'Die Gartenschere ist sehr scharf, also aufpassen!',
            'image' => 'images\Gartenschere.jpg'
        ]);
        Product::create([
            'name' => 'Kunststoff Fliesen',
            'price' => 4.99,
            'details' => 'Blaue Kunststoff Fliesen',
            'manual' => 'Die Kunststoff Fliesen können auf den Boden gelegt werden.',
            'image' => 'images\KunststoffFliesen.jpg'
        ]);
        Product::create([
            'name' => 'Pflanzschale',
            'price' => 19.99,
            'details' => 'Die Pflanzschale ist grau.',
            'manual' => 'Die Pflanzschale ist schwer und leicht zerbrechlich, also aufpassen!',
            'image' => 'images\Pflanzschale.jpg'
        ]);
    }
    
}
