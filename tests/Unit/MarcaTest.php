<?php

namespace Tests\Unit;

use App\Marca;
use App\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MarcaTest extends TestCase
{
	use RefreshDatabase;
    public function test_a_marca_has_produtos()
    {
    		$marca = factory(Marca::class)->create();

    		$this->assertInstanceOf(Collection::class,$marca->productos);
    }

    public function user()
    {
    		$user = $this->crearUser();

    		$marca = factory(Marca::class)->create([
    				'user_id' => $user->id
    		]);

    		$this->assertInstanceOf(User::class,$marca->user);
    }
}
