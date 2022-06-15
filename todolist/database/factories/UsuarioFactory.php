<?php

namespace Database\Factories;

use App\Models\UsuarioModel;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = UsuarioModel::class;

    public function definition()
    {
        return [
            "email" => $this->faker->email(),
            "password" => Hash::make("123456789"),
            "nombre" => now(),
            "apellido" => $this->faker->lastName(),
        ];
    }
}
