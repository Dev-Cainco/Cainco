<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Empresa extends Model
{
    protected $table="empresas";
    protected $fillable=['usuario_id','pagos_id','categoria_id','nombre','email','descripcion','password','direccion','imagen','sitio_web'];

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
 