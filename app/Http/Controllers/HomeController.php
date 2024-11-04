<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function __invoke()
    {
        return view('vistamont'); // Falta el punto y coma aquí
    } 
}
