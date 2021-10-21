<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('catagories')->insert([
            'cat_id' => 1,
            'catName' => 'Armbånd',
            'description' => 'Pisse fede mand',
            //'catImage' => 1,
        ]);

        DB::table('sub_catagories')->insert([
            'subCat_id' => 1,
            'subCatName' => 'Sort Sol',
            'subCatDescription' => 'Pisse sort mand',
            //'subCatImage' => 1,
            'catId' => 1,
        ]);

        DB::table('materials')->insert([
            'mat_id' => 1,
            'matName' => 'Guld',
        ]);

        DB::table('products')->insert([
            'prod_id' => 1,
            'price' => 20.55,
            'size' => 'kæmpe',
            //'productImg' => 'A-300/6-45°',
            'matId' => 1,
            'catId' => 1,
            'subCatId' => 1,
        ]);
    }
}
