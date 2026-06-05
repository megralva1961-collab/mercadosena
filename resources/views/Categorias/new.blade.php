@extends('layout')
@section('title' , 'Registro Categoria')
@section('content')
    <h3 class= "mt-4 mb-3">Registro de Categoria</h3>
    <form action="{{ url('categoria') }}" method="POST">
        @csrf
        <div class= "row">
            <div class="col-md-4">
                <input type="text" name="nombre" class="form-cotrol" placeholder="Ingrese nombre" value="
                {{ old('nombre') }}">
                 @error('nombre')
                    <div class="error compacto col-lg-5">{{ $message}}</div>
                @enderror
            </div>
        </div>
        <br>
        <div class="row"
            <div class="col-md-4">
            <input type="text" name="descripcion" class="form-cotrol" placeholder="Ingrese descripcion" value="
            {{ old(´descripcion')}}">
             @error('descripcion')
                <div class="error compacto col-lg-5">{{ $message}}</div>
            @enderror
            </div>
        </div>
        <br>
        <button class="btn btn-success">Guardar>/button>
        <a href="{{  url('categorias')}}" class "btn btn-secondary">Cancelar</a>
    </form>
@stop()

