@extends('layouts.app')

@section('content')

<div class="row">

    <div class="col-sm-4">

        {{-- TODO: Imagen genérica de los productos --}}

    </div>
    <div class="col-sm-8">

        <p>Nombre: {{ $producto->nombre }}</p>
        <p>Categoría: {{ $producto->categoria }}</p>

        @if($producto->pendiente)
            <a class="btn btn-danger" href="#">Comprar producto</a>
        @else
            <a class="btn btn-primary" href="#">Esta comprado</a>
        @endif
        <a class="btn btn-warning" href="{{ url('/productos/edit/' . $producto->id ) }}">
            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
            Editar Producto</a>
        <a class="btn btn-outline-info" href="{{ action('App\Http\Controllers\ProductoController@getIndex') }}">Volver al listado</a>

    </div>
</div>

@stop
