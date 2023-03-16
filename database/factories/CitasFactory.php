<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Citas;
use App\Models\Paciente;
use App\Models\Hospital;
use App\Models\Doctor;

class CitasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $especialidades = [
            'Cardiología',
            'Dermatología',
            'Endocrinología',
            'Gastroenterología',
            'Geriatría',
            'Hematología',
            'Neumología',
            'Neurología',
            'Oncología',
            'Pediatría',
            'Psiquiatría',
            'Reumatología',
            'Traumatología',
            'Urología',
            'Oftalmología',
        ];

        $paciente = Paciente::factory()->create();
        $doctor = Doctor::factory()->create();

        return [
            'dni_doctor' => $doctor->dni_doctor,
            'dni_paciente' => $paciente->dni_paciente,
            'id_hospital' => Hospital::all()->random()->id_hospital,
            'horaCita' => $this->faker->dateTimeBetween('now', '+1 week')->format('Y-m-d'),
            'Especialidad' => $this->faker->randomElement($especialidades),
            'DescripcionCita' => $this->faker->sentence(),
            'esCancelada' => $this->faker->boolean(),
            'esPospuesta' => $this->faker->boolean(),
        ];
    }
}
