<?php

namespace Database\Seeders;

use App\Models\Dress;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dresses = config('dresses');

        foreach ($dresses as $dress) {
            $newDress = new Dress();
            $newDress->name = $dress['name'];
            $newDress->type = $dress['type'];
            $newDress->brand = $dress['brand'];
            $newDress->size = $dress['size'];
            $newDress->color = $dress['color'];
            $newDress->description = $dress['description'];
            $newDress->price = $dress['price'];
            $newDress->purchase_date = $dress['purchase_date'];
            $newDress->season = $dress['season'];
            $newDress->image = $dress['image'];
            $newDress->save();
        }
    }
}
