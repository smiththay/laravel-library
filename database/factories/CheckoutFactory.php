<?php

namespace Database\Factories;

use App\Models\Checkout;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Book;
use App\Models\User;

class CheckoutFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Checkout::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          
            'ref_user_id' => User::all()->random()->id,
            'ref_book_id' => Book::all()->random()->id,
            'checkout_date' => $this->faker->datetime(), 
            'due_date' => $this->faker->datetime(),
            'return_date' => $this->faker->datetime(),

        ];
    }
}
//echo $faker->idNumber; 
