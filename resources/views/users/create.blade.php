@extends('layouts.app')

@section('content')
    <h1>Agregar Nuevo Usuario</h1>

 <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Correo</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <div class="form-group mt-3">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </form>
@endsection
