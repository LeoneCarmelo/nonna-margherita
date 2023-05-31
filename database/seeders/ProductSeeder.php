<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
       $products = config('nonna_margherita_db');
        //
        foreach ($products as $product) {
            $newProduct = new Product ();
            $newProduct->name = $product['name'];
            $newProduct->description = $product['description'];
            $newProduct->price = $product['price'];
            $newProduct->img = $product['image'];
            $newProduct->in_stock = $product['in_stock'];
            $newProduct->weight = $product['weight'];
            $newProduct->product_code = $product['product_code'];
            $newProduct->save();
        }
        
    }
}
