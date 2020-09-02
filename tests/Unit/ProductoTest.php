<?php

namespace Tests\Unit;

use App\Categoria;
use App\Marca;
use App\Producto;
use App\User;
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
		      	#belongs to many etiquetas
		 public function test_producto_has_etiquetas()
		     {
		     	$categoria = $this->crearCategoria();
		     	$marca =	$this->crearMarca();

		     		$producto = factory(Producto::class)->create([
		     				'marca_id' => $marca->id, 
		     				'categoria_id' => $categoria->id
		     		]);

		     		$this->assertInstanceOf(Collection::class,$producto->etiquetas);
		     }

		     public function test_producto_belongs_to_a_user()
		         {
		         		$categoria= $this->crearCategoria();
		         		$marca = $this->crearMarca();
		         		$user = $this->crearUser();

		         		$producto = factory(Producto::class)->create([
		         				'marca_id' => $marca->id,
		         				'categoria_id' => $categoria->id, 
		         				'user_id' => $user->id
		         		]);

		         		$this->assertInstanceOf(User::class,$producto->user);
		         }    
}
