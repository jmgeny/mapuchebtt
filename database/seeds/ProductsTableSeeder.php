<?php

use Illuminate\Database\Seeder;
use mapuchebtt\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Product::class, 80)->create();
    }
}
