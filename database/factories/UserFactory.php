<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'dni' => $this->faker->unique()->randomNumber(8, true),
            'nombre' => $this-> faker->firstName(),
            'apellidos' => $this-> faker->lastName(),
            'FechaNacimiento' => $this-> faker->date('Y-m-d', '-18 years'),
            'correo' =>  $this->faker->unique()->safeEmail(),
            'password' => Hash::make($this -> faker->password()),
            'esAdmin' =>  $this->faker->boolean(),
        ];
    }
}
