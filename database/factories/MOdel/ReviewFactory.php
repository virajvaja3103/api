<?php

namespace Database\Factories\Model;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    protected $model = App\Models\Review::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_id'=> function(){
                return Product::all()->random();
            },
            'customer'=>$this->faker->name,
            'review' => $this->faker->paragraph,
            'star' =>$this->faker->numberBetween(0,5),

        ];
    }
}
