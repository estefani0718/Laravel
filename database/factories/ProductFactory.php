<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Images;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' =>fake()->word(),
            'price' =>fake()->randomFloat(2,10,1000),
            'stock'=>fake()->numberBetween(0,100),
            'category_id'=>Category::all()->random()->id
            // 'image_id' =>Images::factory()->create()->id,
           

        ];
    }
}
