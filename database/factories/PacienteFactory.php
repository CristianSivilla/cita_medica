<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Paciente;

class PacienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $user = User::factory()->create();

        return [
            'dni_paciente' => $user->dni,
            'nombre' => $this->faker->firstName(),
            'telefono' => $this->faker->phoneNumber(),
            'Direccion' => $this->faker->address(),
            'sexo' => $this->faker->randomElement(['Hombre', 'Mujer', 'No Binario']),
        ];
    }
}
