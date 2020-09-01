<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
    		return view('front.index');
    }

    public function contacto()
    {
    		return view('front.contacto');
    }

    public function producto()
    {
    		return view('front.producto');
    }

    public function carrito()
    {
    		return view('front.carrito');
    }

    public function checkout()
    {
    		return view('front.checkout');
    }
}
