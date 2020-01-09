<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class AlmacenarProductosTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testRegistrarTest()
    {
		$fecha = '10-01-2019';
		$nombre = 'Luis Perez';
		$hora = '10:40 p.m';
		$seccion = 'Seccion A';

		$response= $this->json('get', '/api/test/'.$fecha.'/'.$nombre.'/'.$hora.'/'.$seccion);
		$response->assertStatus(200);
    }
}

