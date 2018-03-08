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
        		"carrera"=>"ingenieria comercial",
        	],
        	[
                  "carrear"=>"ingeniria en sistemas",
        	],
        	[
                 "carrera"=>"contabilidad",
        	],
        	[
                  "carrera"=>"psicologia",
        	],
    	); 
        Carrera::insert($datos);
    }

}
