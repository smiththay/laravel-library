<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->realText($this->faker->numberBetween(10,20)),
            'isbn' => $this->faker->isbn13,
            'excerpt' => $this->faker->text,
            'pages' => $this->faker->numberBetween(2, 50),
            'cost' => $this->faker->randomFloat(2, 10, 50),
            'value' => $this->faker->randomFloat(2, 10, 50),
            'released' => $this->faker->datetime(),
            'current_condition' => 1,
            'status' => 1
          ];
    }
}
  
