<?php

use Illuminate\Database\Seeder;
use App\Categoria;
class categorias extends Seeder
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
                
                "nombre"=>"mmmmm",
               
            ],        
        );
        Categoria::insert($datos);
    }

}