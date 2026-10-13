<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    protected $fillable = [
        'nombre',
        'telefono',
        'puesto',
    ];

    public function pedidos()
    {
        return $this->hasMany(Pedidos::class);
    }
}
