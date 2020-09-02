<?php

namespace Tests\Unit;

use App\Categoria;
use App\Marca;
use App\Producto;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


class ProductoTest extends TestCase
{
		public function test_producto_belongs_to_a_categoria()
		   {
		   		$categoria = factory(Categoria::class)->create();
		   		$marca = factory(Marca::class)->create();

		   		$producto = factory(Producto::class)->create([
		   			'marca_id' => $marca->id,
		   			'categoria_id' => $categoria->id
		   		]);
		   		// dd($producto->categoria, Categoria::class);
		   		$this->assertInstanceOf(Categoria::class,$producto->categoria);
		   }

		public function test_producto_belongs_To_a_marca()
		      {
		      		$categoria = factory(Categoria::class)->create();
		      		$marca = factory(Marca::class)->create();
		      		$producto = factory(Producto::class)->create([
		      			'marca_id' => $marca->id,
		   					'categoria_id' => $categoria->id
		      		]);

		      		$this->assertInstanceOf(Marca::class,$producto->marca);
		      }      
}