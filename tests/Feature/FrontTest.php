<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FrontTest extends TestCase
{
    public function test_index_view_works()
    {
            $this->get(route('front.index'))
            ->assertStatus(200);
    }

    public function test_contacto_view_works()
    {
            $this->get(route('front.contacto'))
                ->assertStatus(200);
    }

    public function test_producto_view_works()
    {
            $this->get(route('front.producto'))
                ->assertStatus(200);
    }


    public function test_carrito_view_works()
    {
            $this->get(route('front.carrito'))
                ->assertStatus(200);
    }

    public function test_checkout_view_works()
    {
            $this->get(route('front.checkout'))
                ->assertStatus(200);
    }

    public function test_catalogo_view_works()
    {
            $this->get(route('front.catalogo'))
                ->assertStatus(200);
    }
}
