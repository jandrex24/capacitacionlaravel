@extends('layouts.app')
@section('title','Pagina de pruebas')
@section('content')

<div class="container">
    <div class="card">
    <div class="card-header bg-primary text-white">
    <h1>Ingreso de Categoria</h1>
    </div>
    <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="{{ route('categories.index') }}" class="btn btn-primary">Retornar</a>

    {!! Form::open() !!}
        {!!  Field::text('name',null,['label'=>'Nombre','placeholder'=>'Ingrese el Nombre']) !!}

        {!!  Field::textarea('description',null,['label'=>'Descripcion','placeholder'=>'Ingrese la descripcion']) !!}

    {!! Form::close()!!}
    </div>
    </div>
    <div>
</div>
@endsection

<!-- -->