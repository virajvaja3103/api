<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator;

use App\Models\Model\Product;
class ProductFactory extends Factory
{
    // protected $model = App\Models\Product::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        return [
            'name'=> $this->faker->word,
            'detail'=>$this->faker->paragraph,
            'price'=> $this->faker->numberBetween(100,1000),
            'stock'=> $this->faker->randomDigit,
            'discount'=>$this->faker->numberBetween(2,30),
            'user_id'=>$this->faker->numberBetween(2,30)
        ];
    }
}
