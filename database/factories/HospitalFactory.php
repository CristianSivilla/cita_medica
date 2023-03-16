<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Hospital;

class HospitalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $hospitales = [
            'Hospital Clinic',
            'Hospital del Mar',
            'Hospital Sant Pau',
            'Hospital Vall Hebron',
            'Hospital de la Santa Creu i Sant Pau',
            'Hospital de Nens de Barcelona',
            'Hospital de Sant Joan de Déu',
            'Hospital Universitari Germans Trias i Pujol',
            'Hospital Universitari Dexeus',
            'Hospital Universitari Quirónsalud Barcelona'
        ];

        return [
            'id_hospital' => $this->faker->unique()->randomNumber(5),
            'nombre' => $this->faker->randomElement($hospitales),
            'direccion' => $this->faker->address(),
            'codigo_postal' => $this->faker->randomNumber(5, true),
            'telefono' => $this->faker->randomNumber(8, true),
        ];
    }
}
