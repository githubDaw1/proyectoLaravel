<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class etiquetaFactory extends Factory {

  /**
    * Define the model's default state.
    *
    * @return array
    */
  public function definition() {

    return [
      'etiqueta' => $this->faker->text(),
      'color' => $this->faker->text(),
    ];
  }
}
