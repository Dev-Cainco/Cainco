<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasante extends Model
{
    protected $table='pasantes';
    protected $fillable=['universidad_id','carrera_id','nombre','apellidoP','apellidoM','ci','password','turno','email','telefono','imagen','fecha_inicio','total_horas'];
}
