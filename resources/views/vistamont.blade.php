<!-- resources/views/vistamont.blade.php -->

@extends('layouts.menu') <!-- Extiende la plantilla base -->

@section('title', 'Centro de Adopción') <!-- Define el título -->

@section('image', 'https://static.vecteezy.com/system/resources/previews/015/449/992/non_2x/adopt-a-pet-from-an-animal-shelter-in-the-form-of-cats-or-dogs-to-care-for-and-look-after-in-flat-cartoon-hand-drawn-templates-illustration-vector.jpg') <!-- Define la imagen -->

@section('header', 'Bienvenidos al centro de adopción') <!-- Define el título de la sección -->

@section('content')
    Explora nuestro centro de adopción para encontrar adorables animales que están buscando un nuevo hogar.
@endsection

@section('tailwind-component')
    <x-pagination/>

@endsection


{{-- <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centro de Adopción</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body style="font-family: Arial, sans-serif; background-color: #beddf0; margin: 0; padding: 20px;">

    <table style="width: 60%; margin: 0 auto; border-collapse: collapse; box-shadow: 0 4px 8px rgba(0,0,0,0.1); background-color: #fff; border-radius: 8px; overflow: hidden;">
        <!-- Fila para la imagen -->
        <tr>
            <td colspan="2" style="text-align: center; padding: 20px;">
                <img src="https://static.vecteezy.com/system/resources/previews/015/449/992/non_2x/adopt-a-pet-from-an-animal-shelter-in-the-form-of-cats-or-dogs-to-care-for-and-look-after-in-flat-cartoon-hand-drawn-templates-illustration-vector.jpg"  style="width: 100%; max-width: 400px; border-radius: 8px;">
            </td>
        </tr>
        
        <!-- Fila para el menú y el contenido -->
        <tr>
            <!-- Columna del menú -->
            <td style="width: 30%; vertical-align: top; padding: 20px; background-color: #3498db; color: white;">
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
                <h2 style="margin-top: 0;">Bienvenidos al centro de adopción </h2>
                <p>Explora nuestro centro de adopción para encontrar adorables animales que están buscando un nuevo hogar.</p>
            </td>
        </tr>
    </table>
    <x-pagination/>

</body>


</html> --}}
