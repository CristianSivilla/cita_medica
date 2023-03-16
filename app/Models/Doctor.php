<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $table = 'doctores';

    protected $primaryKey = 'dni_doctor';

    public $incrementing = false;

    protected $keyType = 'string';

    public $timestamps = false;

    protected $fillable = [
        'dni_doctor',
        'id_hospital',
        'horaEntrada',
        'horaSalida',
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
}


