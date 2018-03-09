<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table="empresas";
    protected $fillable=['usuario_id','pagos_id','categorias_id','nombre','emai','descripcion','password','direccion','imagen','sitio_web'];
}
 