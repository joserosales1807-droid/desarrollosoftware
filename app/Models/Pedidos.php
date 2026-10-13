<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    protected $fillable = [
        'cliente_id',
        'producto_id',
        'cantidad',
    ];
    
}
