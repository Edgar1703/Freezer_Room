<?php

namespace App\Http\Controllers\Services;
use App\Http\Controllers\Controller;
use App\Contracts\IDestinoPaquetes;
use App\Temperatura;
use Illuminate\Support\Facades\DB;

class IngresaTemperaturasService extends Controller implements IIngresaTemperaturas{

	public function guardar($fecha, $hora, $seccion, $temperatura)
	{
		$nuevo = new Temperatura();
		$nuevo->fecha = $fecha;
		$nuevo->hora = $hora;
		$nuevo->seccion = $seccion;
		$nuevo->temperatura = $temperatura;
		$nuevo->save();
	}
		
}