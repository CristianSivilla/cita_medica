<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table = 'users';

    protected $primaryKey = 'dni';

    public $incrementing = false;

    protected $keyType = 'string';

    public $timestamps = false;

    protected $fillable = [
        'dni',
        'nombre',
        'apellidos',
        'FechaNacimiento',
        'correo',
        'password',
        'esAdmin',
    ];

    public function doctor()
    {
        return $this->hasOne(Doctor::class);
    }

    public function paciente()
    {
        return $this->hasOne(Paciente::class);
    }
}







