<?php

namespace Tests\Unit;

use App\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
	use RefreshDatabase;
	public function test_user_has_productos()
	{
			$user = factory(User::class)->create();
			$this->assertInstanceOf(Collection::class,$user->productos);
	}

	public function test_user_has_categorias()
	{
			$user = $this->crearUser();

			$this->assertInstanceOf(Collection::class,$user->categorias);
	}

	public function test_user_has_etiquetas()
	{
			$user = $this->crearUser();

			$this->assertInstanceOf(Collection::class,$user->etiquetas);
	}

	public function test_user_has_marcas()
	{
			$user = $this->crearUser();

			$this->assertInstanceOf(Collection::class,$user->marcas);
	}
}
