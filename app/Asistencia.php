<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    protected $table='asistencias';
    protected $fillable=['pasante_id','usuario_id','hora_inicio','hora_final'];
}
