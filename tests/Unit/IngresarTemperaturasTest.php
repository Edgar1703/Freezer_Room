<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class IngresarTemperaturasTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testRegistrarTest()
    {
		$destino = 'Mexico';
		$costo = '110';
		$periodo = 'Marzo, Abril';
		$contenido = 'un producto';

		$response= $this->json('get', '/api/test/'.$destino.'/'.$costo.'/'.$periodo.'/'.$contenido);
		$response->assertStatus(200);
           
	
    }
}