<?php

namespace Database\Factories;

use App\Models\EtiquetaModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class EtiquetaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = EtiquetaModel::class;

    public function definition()
    {
        return [
            "etiqueta" => $this->faker->text(50),
            "color" => $this->faker->text(6),
        ];
    }
}
