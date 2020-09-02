<?php

namespace Tests\Unit;

use App\Categoria;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Database\Eloquent\Collection;

class CategoriaTest extends TestCase
{
	use RefreshDatabase;
   public function test_categoria_has_productos()
   {	
   		$categoria = factory(Categoria::class)->create();

   		$this->assertInstanceOf(Collection::class,$categoria->productos);
   }

}
