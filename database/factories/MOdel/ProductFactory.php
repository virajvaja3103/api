<?php

namespace Database\Factories\MOdel;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator;

use App\Models\Model\Product;
class ProductFactory extends Factory
{
    protected $model = App\Models\Product::class;
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
            'discount'=>$this->faker->numberBetween(2,30)
        ];

        // return [
        //     'name'=> 'hiteshbhai',
        //     'detail'=>'ddsdsds',
        //     'price'=> '100',
        //     'stock'=> '120',
        //     'discount'=>'100'
        // ];
    }
}
