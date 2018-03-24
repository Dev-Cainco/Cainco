<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Pasante extends Model
{
    protected $table='pasantes';
    protected $fillable=['universidad_id','carrera_id','nombre','apellidoP','apellidoM','ci','password','turno','email','telefono','imagen','fecha_inicio','total_horas','estado'];

    protected $hidden = [
        'password', 'remember_token',
    ];
    public function setImagenAttribute($imagen){
        if(! empty($imagen)){
              $name = Carbon::now()->second.$imagen->getClientOriginalName();
              $this->attributes['imagen'] = $name;
              \Storage::disk('local')->put($name, \File::get($imagen));
        }
    }
    public function setPasswordAttribute($valor){
        if(!empty($valor)){
            $this->attributes['password'] = \Hash::make($valor);
        }
    }
}
