<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $table = 'pacientes';

    protected $primaryKey = 'dni_paciente';

    public $incrementing = false;

    protected $keyType = 'string';

    public $timestamps = false;

    protected $fillable = [
        'dni_paciente',
        'nombre',
        'telefono',
        'Direccion',
        'sexo',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
