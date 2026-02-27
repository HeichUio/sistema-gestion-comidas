@extends('layouts.app')

@section('content')

<form action="{{ route('comidas.update', $comida) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="nombre_comida" value="{{ $comida->nombre_comida }}" required>
    </div>

    <div class="form-group">
        <label>Costo</label>
        <input type="number" step="0.01" name="costo" value="{{ $comida->costo }}" required>
    </div>

    <div class="form-group">
        <label>Descripción</label>
        <textarea name="detalle_comida" required>{{ $comida->detalle_comida }}</textarea>
    </div>

    <div class="form-group">
        <label>Categoría</label>
        <select name="id_tipo_comida" required>
            @foreach($tipos as $tipo)
                <option value="{{ $tipo->id_tipo_comida }}"
                    {{ $comida->id_tipo_comida == $tipo->id_tipo_comida ? 'selected' : '' }}>
                    {{ $tipo->nombre_categoria }}
                </option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn-warning">Actualizar</button>
    <a href="{{ route('comidas.index') }}">
        <button type="button" class="btn-secondary">Volver</button>
    </a>

</form>

@endsection