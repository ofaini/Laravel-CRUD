@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>CRUD con Laravel</h1>
@stop

@section('content')
    <form action="/articulos/{{$articulo->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label">Código</label>
            <input type="text" id="codigo" name="codigo" class="form-control" value="{{$articulo->codigo}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Descripción</label>
            <input type="text" id="descripcion" name="descripcion" class="form-control" value="{{$articulo->descripcion}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Cantidad</label>
            <input type="text" id="cantidad" name="cantidad" class="form-control" value="{{$articulo->cantidad}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Precio</label>
            <input type="number" id="precio" name="precio" step="any" class="form-control" value="{{$articulo->precio}}">
        </div>
        <a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop