<?php

namespace Tests;

use App\Categoria;
use App\Marca;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

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
