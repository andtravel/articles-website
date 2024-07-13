<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\State>
 */
class StateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'article_id' => $this->faker->unique()->numberBetween(1, 30),
            'views' => $this->faker->numberBetween(50, 100),
            'likes' => $this->faker->numberBetween(0, 50),
        ];
    }
}
