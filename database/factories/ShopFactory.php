<?php

namespace Database\Factories;

use App\Models\Shop;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShopFactory extends Factory
{
    protected $model = Shop::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word, // Generates a random word for item name
            'brand' => $this->faker->company, // Generates a random company name for brand
            'price' => $this->faker->randomFloat(2, 10, 1000), // Generates a random price between 10 and 1000
        ];
    }
}
