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
        //
        Product::create([
        	'name' => 'Pintura sintetica color negro',
        	'cost' => 35,
        	'price' => 30,
        	'barcode' => '75010065987',
        	'stock' => 100,
        	'alerts' => 10,
        	'category_id' => 1,
        	'image' => ''
        ]);
        Product::create([
        	'name' => 'Pintura sintetica color rojo',
        	'cost' => 35,
        	'price' => 30,
        	'barcode' => '72345065987',
        	'stock' => 90,
        	'alerts' => 10,
        	'category_id' => 1,
        	'image' => ''
        ]);
        Product::create([
        	'name' => 'Cable de aluminio cuprico # 16',
        	'cost' => 128,
        	'price' => 100,
        	'barcode' => '75018763487',
        	'stock' => 80,
        	'alerts' => 10,
        	'category_id' => 1,
        	'image' => ''
        ]);
        Product::create([
        	'name' => 'Pintura ñatex color arena',
        	'cost' => 82,
        	'price' => 76,
        	'barcode' => '75123456787',
        	'stock' => 30,
        	'alerts' => 10,
        	'category_id' => 1,
        	'image' => ''
        ]);
    }
}
