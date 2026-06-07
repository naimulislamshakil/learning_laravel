<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            ['name' => 'iPhone 15 Pro', 'price' => 1199.99, 'stock' => 15, 'image' => 'iphone15.jpg'],
            ['name' => 'Samsung Galaxy S24 Ultra', 'price' => 1099.99, 'stock' => 20, 'image' => 's24ultra.jpg'],
            ['name' => 'MacBook Air M3', 'price' => 1499.99, 'stock' => 10, 'image' => 'macbookair.jpg'],
            ['name' => 'Sony WH-1000XM5', 'price' => 399.99, 'stock' => 30, 'image' => 'sony.jpg'],
            ['name' => 'Nike Air Max 270', 'price' => 149.99, 'stock' => 50, 'image' => 'nike.jpg'],
            ['name' => 'Dell XPS 13', 'price' => 1299.99, 'stock' => 12, 'image' => 'dell.jpg'],
            ['name' => 'HP Spectre x360', 'price' => 1399.99, 'stock' => 8, 'image' => 'hp.jpg'],
            ['name' => 'iPad Pro M2', 'price' => 999.99, 'stock' => 25, 'image' => 'ipad.jpg'],
            ['name' => 'Apple Watch Series 9', 'price' => 499.99, 'stock' => 40, 'image' => 'watch.jpg'],
            ['name' => 'AirPods Pro 2', 'price' => 249.99, 'stock' => 60, 'image' => 'airpods.jpg'],
        ];

        // duplicate 3 times to make 30 products
        for ($i = 0; $i < 3; $i++) {
            foreach ($products as $item) {
                Product::create([
                    'name' => $item['name'],
                    'slug' => Str::slug($item['name'] . '-' . $i),
                    'description' => $item['name'] . ' high quality premium product',
                    'price' => $item['price'],
                    'stock' => $item['stock'],
                    'image' => $item['image'],
                    'status' => true,
                ]);
            }
        }
    }
}