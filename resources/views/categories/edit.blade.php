@extends('layouts.app')
@section('title','Pagina de pruebas')
@section('content')

<div class="container">
    <div class="card">
    <div class="card-header bg-primary text-white">
    <h1>Ediciòn de Categoria</h1>
    </div>
    <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="{{ route('categories.index') }}" class="btn btn-primary">Retornar</a>

    {!! Form::open(['route'=>['categories.update',$category],'method'=>'PUT']) !!}

        {!!  Field::text('name',$category->name,['label'=>'Nombre','placeholder'=>'Ingrese el Nombre']) !!}

        {!!  Field::textarea('description',$category->description,['label'=>'Descripcion','placeholder'=>'Ingrese la descripcion']) !!}

        {!!  Form::submit('Guardar',['class'=>'btn btn-primary']) !!}


    {!! Form::close()!!}
    </div>
    </div>
    <div>
</div>
@endsection

<!-- -->