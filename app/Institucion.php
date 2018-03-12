<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institucion extends Model
{
    protected $table='institucions';
    protected $fillable=['usuario_id','nombre','descripcion','direccion','telefono','email','logo','vision'];
}
