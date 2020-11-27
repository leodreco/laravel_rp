<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    
    protected $table = 'cliente';
    protected $primaryKey = 'id';
    public $timestamps = false;
    
    protected $attributes = [
        'cod', 'nombre', 'direccion', 'dni', 'ruc', 'estado', 'empleado'
    ];
}
