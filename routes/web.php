<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AnimalController;
use App\Models\Mascota;

Route::get('/', function () {
    return view ('welcome');
});

Route::get('/bienvenido', function () {
    return 'Bienvenido a esta página';
});

Route::get('/montse',HomeController::class, 'inicio');

Route::get('/perros', [AnimalController::class, 'perros']);
Route::get('/gatos', [AnimalController::class, 'gatos']);
Route::get('/conejos', [AnimalController::class, 'conejos']);
Route::get('/hurones', [AnimalController::class, 'hurones']);
Route::get('/patos', [AnimalController::class, 'patos']);



// Route::get('/prueba', function () {
//     $mascota = new Mascota();
//     $mascota->nombre = 'Bella';
//     $mascota->especie = 'Perro';
//     $mascota->edad = 1;
//     $mascota->raza = 'Chihuahua';
//     $mascota->descripcion = 'Pequeña y enérgica';
//     $mascota->disponible = true;
//     $mascota->save();
   
//     return $mascota; // Devuelve la instancia de mascota guardada
// });

Route::get('/prueba2', function () {
    $mascota = new Mascota();
    $mascota->nombre = 'Lilo';
    $mascota->especie = 'Perro';
    $mascota->edad = 3;
    $mascota->raza = 'Salchicha';
    $mascota->descripcion = 'Curiosa y cariñosa';
    $mascota->disponible = true;
    $mascota->save();
   
    return $mascota; // Devuelve la instancia de mascota guardada
});

Route::get('/prueba3', function () {
    $mascota = new Mascota();
    $mascota->nombre = 'Mandarino';
    $mascota->especie = 'GATO';
    $mascota->edad = 2;
    $mascota->raza = 'Siames';
    $mascota->descripcion = 'Juguetón y travieso';
    $mascota->disponible = 0;
    $mascota->save();
   
    return $mascota; // Devuelve la instancia de mascota guardada
});

// Route::get('/prueba', function () {
//     $mascotas = Mascota::find(3);
//     return $mascotas;
// });

// Route::get('/prueba', function () {
//     $mascotas = Mascota::find(3);
//     $mascotas->delete(); // Se añadió el punto y coma al final
// });
