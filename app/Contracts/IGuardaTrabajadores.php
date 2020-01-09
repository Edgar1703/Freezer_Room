<?php

namespace App\Contracts;

interface IGuardaTrabajadores{	
	public function guardar($nombre, $edad, $seccion);
}