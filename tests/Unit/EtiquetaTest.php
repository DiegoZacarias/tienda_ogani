<?php

namespace Tests\Unit;

use App\Etiqueta;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EtiquetaTest extends TestCase
{
	use RefreshDatabase;

	public function test_etiqueta_has_productos()
	   {
	   		$etiqueta = factory(Etiqueta::class)->create();

	   		$this->assertInstanceOf(Collection::class,$etiqueta->productos);
	   }   
}
