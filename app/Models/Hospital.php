<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;

    protected $table = 'hospital';

    protected $primaryKey = 'id_hospital';

    public $incrementing = true;

    protected $keyType = 'integer';

    public $timestamps = false;

    protected $fillable = [
        'id_hospital',
        'nombre',
        'direccion',
        'codigo_postal',
        'telefono',
    ];

    public function citas()
    {
        return $this->hasMany(Citas::class, 'id_hospital', 'id_hospital');
    }
}


