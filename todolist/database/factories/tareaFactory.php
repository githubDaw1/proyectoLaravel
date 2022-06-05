<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class tareaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->title(),
            'texto' => $this->faker->text(),
            'fecha' => now(),
            'completa' => $this->faker->boolean(),
        ];
    }
}
