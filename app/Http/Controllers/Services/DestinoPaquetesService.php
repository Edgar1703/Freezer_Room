<?php

namespace App\Http\Controllers\Services;
use App\Http\Controllers\Controller;
use App\Contracts\IDestinoPaquetes;
use App\Paquete;
use Illuminate\Support\Facades\DB;

class DestinoPaquetesService extends Controller implements IDestinoPaquetes{

	public function adquirir($destino, $costo, $periodo, $contenido)
	{
		$nuevo = new Paquete();
		$nuevo->destino = $destino;
		$nuevo->costo = $costo;
		$nuevo->periodo = $periodo;
		$nuevo->contenido = $contenido;
		$nuevo->save();

		return array('paquete'=>'entregado');
	}
		
}