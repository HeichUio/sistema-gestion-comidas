@extends('layouts.app')

@section('content')

<form action="{{ route('comidas.store') }}" method="POST">
    @csrf

    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="nombre_comida" required>
    </div>

    <div class="form-group">
        <label>Costo</label>
        <input type="number" step="0.01" name="costo" required>
    </div>

    <div class="form-group">
        <label>Descripción</label>
        <textarea name="detalle_comida" required></textarea>
    </div>

    <div class="form-group">
        <label>Categoría</label>
        <select name="id_tipo_comida" required>
            @foreach($tipos as $tipo)
                <option value="{{ $tipo->id_tipo_comida }}">
                    {{ $tipo->nombre_categoria }}
                </option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn-primary">Guardar</button>
    <a href="{{ route('comidas.index') }}">
        <button type="button" class="btn-secondary">Volver</button>
    </a>

</form>

@endsection