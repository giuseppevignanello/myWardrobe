<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['name' => 'Abbigliamento donna'],
            ['name' => 'Abbigliamento uomo'],
            ['name' => 'Scarpe donna'],
            ['name' => 'Scarpe uomo'],
            ['name' => 'Accessori moda'],
            ['name' => 'Borse e zaini'],
            ['name' => 'Gioielli e orologi'],
            ['name' => 'Sport e attività all\'aperto'],
            ['name' => 'Abbigliamento per bambini'],
            ['name' => 'Intimo e abbigliamento notte'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}