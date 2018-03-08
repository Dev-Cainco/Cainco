<?php

use Illuminate\Database\Seeder;
use App\User;
class usuarios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos=array(
            [
                "carrera_id"=>1,
                "nombre"=>"Gabriel",
                "apellidoP"=>"Pinto",
                "apellidoM"=>"Cutili",
                "ci"=>13149840,
                "turno"=>"mañana",
                "email"=>"angel22586310@gmail.com",
                "telefono"=>22586310,
                "password"=>\Hash::make('123456'),
                "imagen"=>"perfil.jpg"
            ],        
        );
        User::insert($datos);
    }

}
