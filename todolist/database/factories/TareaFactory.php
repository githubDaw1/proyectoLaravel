<?php

namespace Database\Factories;

use App\Models\TareaModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class TareaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = TareaModel::class;

    public function definition()
    {
        return [
            "titulo" => $this->faker->title(),
            "texto" => $this->faker->text(),
            "fecha" => now(),
            "completa" => $this->faker->integer(0, 1),
        ];
    }
}
