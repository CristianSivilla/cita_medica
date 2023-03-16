<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Hospital;

class DoctorFactory extends Factory
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
            'dni_doctor' => $user->dni,
            'id_hospital' => Hospital::all()->random()->id_hospital,
            'horaEntrada' => $this->faker->dateTime()->format('Y-m-d H:i:s'),
            'horaSalida' => $this->faker->dateTime()->format('Y-m-d H:i:s'),
        ];
    }
    
    }


