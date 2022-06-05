<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class usuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     *
     */

    public function definition() {
        return [
          'email' => $this->faker->unique()->safeEmail(),
          'password' => $this->faker->text(),
          'nombre' => $this->faker->name(),
          'apellidos' => $this->faker->text(),
        ];
    }
}
