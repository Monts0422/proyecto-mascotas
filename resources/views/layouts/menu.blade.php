<!-- resources/views/layouts/layout.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title> <!-- Título dinámico -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Sección para incluir componentes de Tailwind específicos -->
    @yield('tailwind-component')
    
    <!-- Estilos adicionales si son necesarios -->
    <style>
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
<body style="font-family: Arial, sans-serif; background-color: #beddf0; margin: 0; padding: 20px;">

    <table style="width: 60%; margin: 0 auto; border-collapse: collapse; box-shadow: 0 4px 8px rgba(0,0,0,0.1); background-color: #fff; border-radius: 8px; overflow: hidden;">
        <!-- Fila para la imagen -->
        <tr>
            <td colspan="2" style="text-align: center; padding: 20px;">
                <img src="@yield('image')" style="width: 100%; max-width: 400px; border-radius: 8px;">
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
                <h2 style="margin-top: 0;">@yield('header')</h2> <!-- Título dinámico -->
                <p>@yield('content')</p> <!-- Contenido dinámico -->
            </td>
        </tr>
    </table>

</body>
</html>
