<?php

use Illuminate\Database\Seeder;
use App\Libro;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
      Libro::create([
     'nombre' 			=>	'lalalal',
     'resumen'		=>	'jajajajajja',
     'npagina'  => '89',
     'edicion' => '45',
     'autor' => 'carlos',
     'precio' => '456'
    ]);
    }
    }

    }