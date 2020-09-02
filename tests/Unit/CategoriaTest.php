<?php

namespace Tests\Unit;

use App\Categoria;
use App\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoriaTest extends TestCase
{
	use RefreshDatabase;
   public function test_categoria_has_productos()
   {	
   		$categoria = factory(Categoria::class)->create();

   		$this->assertInstanceOf(Collection::class,$categoria->productos);
   }

   public function test_categoria_belongs_to_a_user()
   {
   		$user = $this->crearUser();
   		$categoria = factory(Categoria::class)->create([
   				'user_id' => $user->id
   		]);

   		$this->assertInstanceOf(User::class,$categoria->user);
   }

}
