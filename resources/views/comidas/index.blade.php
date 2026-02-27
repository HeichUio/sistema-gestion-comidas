@extends('layouts.app')

@section('content')

<a href="{{ route('comidas.create') }}">
    <button class="btn-primary">Agregar Comida</button>
</a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Costo</th>
            <th>Detalle</th>
            <th>Categoría</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($comidas as $comida)
        <tr>
            <td>{{ $comida->id_comida }}</td>
            <td>{{ $comida->nombre_comida }}</td>
            <td>${{ $comida->costo }}</td>
            <td>{{ $comida->detalle_comida }}</td>
            <td>{{ $comida->tipoComida->nombre_categoria }}</td>
            <td>
                <a href="{{ route('comidas.edit', $comida) }}">
                    <button class="btn-warning">Editar</button>
                </a>

                <form action="{{ route('comidas.destroy', $comida) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection