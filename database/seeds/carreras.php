<?php

use Illuminate\Database\Seeder;
use App\Carrera;
class carreras extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos=array
        (
        	[
                "nombre"=>"ingenieria comercial",
        	],
        	[
                  "nombre"=>"ingeniria en sistemas",
        	],
        	[
                 "nombre"=>"contabilidad",
        	],
        	[
                  "nombre"=>"psicologia",
        	],
    	); 
        Carrera::insert($datos);
    }

}
