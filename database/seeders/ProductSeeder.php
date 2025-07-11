<?php

namespace Database\Seeders;

use App\Models\Images;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::factory(40)->create()->each(function (Product $products){
             Images::factory(2)->create([
                'imageable_id'=>$products->id,
                'imageable_type'=>Product::class
            ]);
        });
    }
}
