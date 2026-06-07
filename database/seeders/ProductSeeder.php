<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Product::create([
            'name' => 'iPhone 15 Pro',
            'slug' => Str::slug('iPhone 15 Pro'),
            'description' => 'Latest Apple flagship smartphone with A17 Pro chip',
            'price' => 1199.99,
            'stock' => 15,
            'image' => 'iphone15.jpg',
            'status' => true,
        ]);

        Product::create([
            'name' => 'Samsung Galaxy S24 Ultra',
            'slug' => Str::slug('Samsung Galaxy S24 Ultra'),
            'description' => 'Premium Android phone with AI features and S-Pen',
            'price' => 1099.99,
            'stock' => 20,
            'image' => 's24ultra.jpg',
            'status' => true,
        ]);

        Product::create([
            'name' => 'MacBook Air M3',
            'slug' => Str::slug('MacBook Air M3'),
            'description' => 'Lightweight Apple laptop with M3 chip',
            'price' => 1499.99,
            'stock' => 10,
            'image' => 'macbookair.jpg',
            'status' => true,
        ]);

        Product::create([
            'name' => 'Sony WH-1000XM5',
            'slug' => Str::slug('Sony WH-1000XM5'),
            'description' => 'Noise-cancelling wireless headphones',
            'price' => 399.99,
            'stock' => 30,
            'image' => 'sony-headphones.jpg',
            'status' => true,
        ]);

        Product::create([
            'name' => 'Nike Air Max 270',
            'slug' => Str::slug('Nike Air Max 270'),
            'description' => 'Comfortable running shoes',
            'price' => 149.99,
            'stock' => 50,
            'image' => 'nike-airmax.jpg',
            'status' => true,
        ]);
    }
}
