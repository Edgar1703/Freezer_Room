<?php

namespace App\Http\Controllers\Services;
use App\Http\Controllers\Controller;
use App\Contracts\IDestinoPaquetes;
use App\Producto;
use Illuminate\Support\Facades\DB;

class AlmacenaProductosService extends Controller implements IAlmacenaProductos{

	public function almacenar($fecha, $nombre, $hora, $seccion)
	{
		$nuevo = new Producto();
		$nuevo->fecha = $fecha;
		$nuevo->nombre = $nombre;
		$nuevo->hora = $hora;
		$nuevo->seccion = $seccion;
		$nuevo->save();
	}
		
}