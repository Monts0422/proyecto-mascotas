<!-- resources/views/vistamont.blade.php -->

@extends('layouts.menu') <!-- Extiende la plantilla base -->

@section('title', 'Sección de Patitos')<!-- Define el título -->

@section('image', 'https://i.pinimg.com/236x/32/5e/d0/325ed04e47492f61a99069045a8d4ff1.jpg') <!-- Define la imagen -->

@section('header', 'Adopta un Patito') <!-- Define el título de la sección -->

@section('content')
    Explora nuestro centro de adopción para encontrar adorables Patitos que están buscando un nuevo hogar.
@endsection

@section('tailwind-component')
    <x-badges/>

@endsection


{{-- <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adopta un Pato</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Estilos para centrar las imágenes dentro de la tabla */
        .image-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }

        .image-container img {
            max-width: 150px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f0edbe; margin: 0; padding: 20px;">

    <table style="width: 60%; margin: 0 auto; border-collapse: collapse; box-shadow: 0 4px 8px rgba(0,0,0,0.1); background-color: #fff; border-radius: 8px; overflow: hidden;">
        <!-- Fila para las imágenes -->
        <tr>
            <td colspan="2" style="text-align: center; padding: 20px;">
                <div class="image-container">
                     <img src="https://i.pinimg.com/236x/32/5e/d0/325ed04e47492f61a99069045a8d4ff1.jpg" alt="Pato 1">
                    <img src="https://i.pinimg.com/550x/26/aa/85/26aa857ecb64f092fcf3e842b172c79b.jpg" alt="Pato 2">
                    <img src="https://i.pinimg.com/236x/2c/ac/ae/2cacae63626e91d6887608bf51217907.jpg" alt="Pato 3">
   

                </div>
            </td>
        </tr>
        
        <!-- Fila para el menú y el contenido -->
        <tr>
            <!-- Columna del menú -->
            <td style="width: 30%; vertical-align: top; padding: 20px; background-color: #f3a20a; color: white;">
                <ul style="list-style-type: none; padding: 0;">
                    <li style="margin-bottom: 10px;"><a href="/montse" style="color: white; text-decoration: none; font-weight: bold;">INICIO</a></li>
                    <li style="margin-bottom: 10px;"><a href="/perros" style="color: white; text-decoration: none; font-weight: bold;">PERROS</a></li>
                    <li style="margin-bottom: 10px;"><a href="/gatos" style="color: white; text-decoration: none; font-weight: bold;">GATOS</a></li>
                    <li style="margin-bottom: 10px;"><a href="/conejos" style="color: rgb(255, 255, 255); text-decoration: none; font-weight: bold;">CONEJOS</a></li>
                    <li style="margin-bottom: 10px;"><a href="/hurones" style="color: white; text-decoration: none; font-weight: bold;">HURONES</a></li>
                    <li style="margin-bottom: 10px;"><a href="/patos" style="color: white; text-decoration: none; font-weight: bold;">PATOS</a></li>
                </ul>
            </td>
            
            <!-- Columna del contenido -->
            <td style="padding: 20px; font-size: 18px; color: #2c3e50;">
                <h2 style="margin-top: 0;">Bienvenidos a la Sección de Patitos</h2>
                <p>Adopta un Patito</p>
            </td>
        </tr>
    </table>
    <x-badges/>
</body>
</html> --}}


      
