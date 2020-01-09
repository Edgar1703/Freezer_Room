<?php

namespace App\Http\Controllers\Services;
use App\Http\Controllers\Controller;
use App\Contracts\IDestinoPaquetes;
use App\Trabajador;
use Illuminate\Support\Facades\DB;

class GuardaTrabajadoresService extends Controller implements IGuardaEmpleado{

	public function guardar($nombre, $edad,$seccion)
	{
		$nuevo = new Trabajador();
		$nuevo->nombre = $nombre;
		$nuevo->edad = $edad;
		$nuevo->seccion = $seccion;
		$nuevo->save();
	}
		
}