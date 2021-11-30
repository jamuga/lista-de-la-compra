@extends('layouts.master')

@section('content')

<div class="row">

    <div class="col-sm-4">

        {{-- TODO: Imagen genérica de los productos --}}

    </div>
    <div class="col-sm-8">

        <p>Nombre: {{ $producto[0] }}</p>
        <p>Categoría: {{ $producto[1] }}</p>

    </div>
</div>

@stop
