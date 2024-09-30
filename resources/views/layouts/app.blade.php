<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel CRUD</title>
    <!-- Cargar archivos de Vite -->
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    <!-- Cargar estilo personalizado (si aplica) -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Cargar Bootstrap 5 (opcional, si no está en app.css) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <!-- Alerta de éxito -->
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- Contenido principal -->
        @yield('content')
    </div>

    <!-- Cargar scripts de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

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
