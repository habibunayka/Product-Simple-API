<?php

namespace Database\Seeders;

use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => "Baju",
                'price' => "20",
                'stock' => "12",
                'weight' => "0.2",
                'status' => "available",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => "Mainan",
                'price' => "10",
                'stock' => "0",
                'weight' => "2",
                'status' => "out_of_stock",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
