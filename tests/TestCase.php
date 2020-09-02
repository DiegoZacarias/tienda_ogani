<?php

namespace Tests;

use App\Categoria;
use App\Marca;
use App\User;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected function crearUser()
    {
            return factory(User::class)->create();
    }
     protected function crearCategoria()
    {
    		$categoria = factory(Categoria::class)->create();

    		return $categoria;
    }

    protected function crearMarca()
    {
    		$marca = factory(Marca::class)->create();

            return $marca;
    }
}
