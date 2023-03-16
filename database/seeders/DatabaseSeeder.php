<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            HospitalSeeder::class,
            DoctorSeeder::class,
            PacienteSeeder::class,
            CitasSeeder::class,



        ]);
    }
}
