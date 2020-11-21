<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product();
        $product->productName = "S650L";
        $product->productType = "Sedan";
        $product->productColor = "yellow";
        $product->productPrice = "100003030303030";
        $product->save();
    }
}
