<!-- resources/views/vistamont.blade.php -->

@extends('layouts.menu') <!-- Extiende la plantilla base -->

@section('title', 'Sección de perritos')<!-- Define el título -->

@section('image', 'https://i.pinimg.com/236x/aa/b4/c2/aab4c2547fb01fcaa261b049a1b0045e.jpg') <!-- Define la imagen -->

@section('header', 'Adopta un perrito') <!-- Define el título de la sección -->

@section('content')
    Explora nuestro centro de adopción para encontrar adorables perritos que están buscando un nuevo hogar.
@endsection

@section('tailwind-component')
    <x-avatar/>

@endsection

{{-- <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adopta un Perro</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <x-avatar/>
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
<body style="font-family: Arial, sans-serif; background-color: #f0debe; margin: 0; padding: 20px;">

    <table style="width: 60%; margin: 0 auto; border-collapse: collapse; box-shadow: 0 4px 8px rgba(0,0,0,0.1); background-color: #fff; border-radius: 8px; overflow: hidden;">
        <!-- Fila para las imágenes -->
        <tr>
            <td colspan="2" style="text-align: center; padding: 20px;">
                <div class="image-container">
                    <img src="https://i.pinimg.com/236x/aa/b4/c2/aab4c2547fb01fcaa261b049a1b0045e.jpg" alt="Perro 1">
                    <img src="https://static8.depositphotos.com/1377416/845/i/450/depositphotos_8457803-stock-photo-two-nice-puppies.jpg" alt="Perro 2">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQVaYM2tj-zRLxvgS1B8bPdyuHhSA97dNo0KA&s" alt="Perro 3">
                </div>
            </td>
        </tr>
        
        <!-- Fila para el menú y el contenido -->
        <tr>
            <!-- Columna del menú -->
            <td style="width: 30%; vertical-align: top; padding: 20px; background-color: #864417; color: white;">
                <ul style="list-style-type: none; padding: 0;">
                    <li style="margin-bottom: 10px;"><a href="/montse" style="color: white; text-decoration: none; font-weight: bold;">INICIO</a></li>
                    <li style="margin-bottom: 10px;"><a href="/perros" style="color: white; text-decoration: none; font-weight: bold;">PERROS</a></li>
                    <li style="margin-bottom: 10px;"><a href="/gatos" style="color: white; text-decoration: none; font-weight: bold;">GATOS</a></li>
                    <li style="margin-bottom: 10px;"><a href="/conejos" style="color: white; text-decoration: none; font-weight: bold;">CONEJOS</a></li>
                    <li style="margin-bottom: 10px;"><a href="/hurones" style="color: white; text-decoration: none; font-weight: bold;">HURONES</a></li>
                    <li style="margin-bottom: 10px;"><a href="/patos" style="color: white; text-decoration: none; font-weight: bold;">PATOS</a></li>
                </ul>
            </td>
            
            <!-- Columna del contenido -->
            <td style="padding: 20px; font-size: 18px; color: #2c3e50;">
                <h2 style="margin-top: 0;">Bienvenidos a la Sección de Perritos</h2>
                <p>Adopta un Perrito</p>
            </td>
        </tr>
    </table>

</body>
</html> --}}