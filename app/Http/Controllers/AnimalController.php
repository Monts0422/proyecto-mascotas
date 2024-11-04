<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function inicio()
    {
        return view('vistamont');
    }

    public function perros()
    {
        return view('perritos');
    }

    public function gatos()
    {
        return view('gatitos');
    }

    public function conejos()
    {
        return view('conejitos');
    }

    public function hurones()
    {
        return view('hurones');
    }

    public function patos()
    {
        return view('patitos');
    }
}