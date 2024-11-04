<!-- resources/views/vistamont.blade.php -->

@extends('layouts.menu') <!-- Extiende la plantilla base -->

@section('title', 'Sección de Hurones')<!-- Define el título -->

@section('image', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEggtsqF_zz12xVvOStwImuGCl9rU9HRPQcuvvb6aQmwVuWEbuh5iYCvowcNnLowJUN6ofjeXDaMYWp7vfG5rkqErBrCK21oE1BDXw9BMnJ9rYafDN-awj3nNn6bS5yddyVg-NywjVZZjg8/s1600/huron-7991.jpeg') <!-- Define la imagen -->

@section('header', 'Adopta un Gatito') <!-- Define el título de la sección -->

@section('content')
    Explora nuestro centro de adopción para encontrar adorables Hurones que están buscando un nuevo hogar.
@endsection

@section('tailwind-component')
    <x-navegation/>

@endsection




{{-- <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adopta un Huron</title>
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
<body style="font-family: Arial, sans-serif; background-color: #b1aa9d; margin: 0; padding: 20px;">

    <table style="width: 60%; margin: 0 auto; border-collapse: collapse; box-shadow: 0 4px 8px rgba(0,0,0,0.1); background-color: #fff; border-radius: 8px; overflow: hidden;">
        <!-- Fila para las imágenes -->
        <tr>
            <td colspan="2" style="text-align: center; padding: 20px;">
                <div class="image-container">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEggtsqF_zz12xVvOStwImuGCl9rU9HRPQcuvvb6aQmwVuWEbuh5iYCvowcNnLowJUN6ofjeXDaMYWp7vfG5rkqErBrCK21oE1BDXw9BMnJ9rYafDN-awj3nNn6bS5yddyVg-NywjVZZjg8/s1600/huron-7991.jpeg" alt="Hurón 1">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSv26LW1SolTcsgkwss9s_O4qWZlZn2ZEeZBw&s" alt="Hurón 2">
                    <img src="https://www.clarin.com/img/2021/01/26/oh-uay0Em_600x600__1.jpg" alt="Hurón 3">
  
                </div>
            </td>
        </tr>
        
        <!-- Fila para el menú y el contenido -->
        <tr>
            <!-- Columna del menú -->
            <td style="width: 30%; vertical-align: top; padding: 20px; background-color: #8f664a; color: white;">
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
                <h2 style="margin-top: 0;">Bienvenidos a la Sección de Hurones</h2>
                <p>Adopta un Huron</p>
            </td>
        </tr>
    </table>
    <x-navegation/>
</body>
</html>
        
         --}}