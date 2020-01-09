<?php

namespace App\Contracts;

interface IAlmacenaProductos{	
	public function almacenar($fecha, $nombre, $hora, $seccion);
}