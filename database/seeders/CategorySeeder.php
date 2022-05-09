<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Category::create([
        	'name' => 'Pintura al aceite',
        	'image' => ''
        ]);
        Category::create([
        	'name' => 'Pintura al agua',
        	'image' => ''
        ]);
        Category::create([
        	'name' => 'Cables',
        	'image' => ''
        ]);
    }
}
