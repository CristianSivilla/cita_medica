<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Citas;
use App\Models\Doctor;
use App\Models\Hospital;
use App\Models\Paciente;


use Illuminate\Support\Facades\DB;

class CitasController extends Controller
{
 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $citas = DB::table('citas')->all();
        $pacientes = DB::table('pacientes')->all();
        return response()->json([$citas,$pacientes]); 
    }

    public function buscarCita($especialidad, $horaCita = null, $nombreHospital = null)
    {
        $query = Citas::select('horaCita', 'Especialidad', 'DescripcionCita', 'hospital.nombre', 'hospital.direccion')
                ->join('hospital', 'hospital.id_hospital', '=', 'citas.id_hospital')
                ->where('Especialidad', $especialidad);

        if ($horaCita) {
            $query->where('horaCita', $horaCita);
        }

        if ($nombreHospital) {
            $query->where('hospital.nombre', 'like', '%' . $nombreHospital . '%');
        }

        $citas = $query->get();

        return response()->json($citas);
    }

    }
