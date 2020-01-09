<?php

namespace App\Contracts;

interface IIngresaTemperaturas{	
	public function guardar($fecha, $hora, $seccion, $temperatura);
}