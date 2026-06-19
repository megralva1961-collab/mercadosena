@extends('layout')
@section('title', 'Categorias')
@section('content')
<h3 class="mt-4>">Listado de Categorias</h3>
<div class="text-end">
    <a href="{{ url('categorias/create')}}" class="btn btn-primary">Nuevo</a>
</div>
@if(session('type'))
    <div class"alert alert-{{ session('type') }} alert-dismissible fade show" roles "alert">
        <strong>Noticia:</strong>{{ session('message') }}
        <button type="button" class="btn-close" data-bs-dismiss= "alert" aria-label="close">
        </button>
    </div>
@endif
<table class="table">
    <thead>
        <th>Nombre</th>
        <th>Descripción</Th>
        <th>Acciones</th>
    </thead>
    <tbody>
        @foreach($datos as $categoria)
            <tr>
                <td>
                    {{ $categoria->nombre }}
                </td>
                <td>
                    {{ $categoria->descripción }}
                </td>
                <td>
                    <a href"{{ route('categorias.edit') }}" class="btn btn-info">
                        <img src="{{ url('img/icons8-editar.gif') }}" with="25">
                    </a>
                    <form action="{{ route('categorias.destroy',$categoria->id) }}" mathod="POST">
                        @csrf
                        @method("DELETE")
                        <button class="btn btn-danger" onclick="return confirm('¿Quiere eliminar el registro?')">
                            <img src="{{  url('img/icons8-borrar-100.png') }}" width=25">
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@stop()
