<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel CRUD</title>
    <!-- Cargar archivos de Vite con React -->
    @vite(['resources/js/app.jsx', 'resources/css/app.css'])
    <!-- Cargar estilo personalizado (si aplica) -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div id="app" class="container mt-4">
        <!-- React se montará aquí -->
    </div>

    <!-- Script para hacer desaparecer la alerta automáticamente después de 3 segundos -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var alert = document.querySelector('.alert');
            if (alert) {
                setTimeout(function() {
                    alert.classList.remove('show');
                }, 3000);
            }
        });
    </script>
</body>
</html>
