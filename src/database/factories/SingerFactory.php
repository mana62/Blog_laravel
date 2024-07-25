<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Singer;

class SingerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name,
            'age'=>$this->faker->numberBetween(1,100),
            'nationality'=>$this->faker->country,
            'song'=>$this->faker->word,
            'release'=>$this->faker->date,
        ];
    }
}
