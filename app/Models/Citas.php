<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citas extends Model
{
    use HasFactory;

    protected $table = 'citas';

    protected $primaryKey = 'id';

    public $incrementing = false;

    protected $keyType = 'integer';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'dni_doctor',
        'dni_paciente',
        'id_hospital',
        'horaCita',  
        'Especialidad',
        'DescripcionCita',
        'esCancelada',
        'esPospuesta'   
    ];

    public function hospital()
    {
        return $this->belongsTo(Hospital::class, 'id_hospital', 'id_hospital');
    }
}

