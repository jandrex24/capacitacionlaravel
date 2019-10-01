@extends('layouts.app')
@section('title','Actualizaciòn')
@section('content')

<div class="container">
    <div class="card">
    <div class="card-header bg-primary text-white">
    <h1>Actualizaciòn de Usuario</h1>
    </div>
    <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="{{ route('registers.index') }}" class="btn btn-primary">Retornar</a>

    {!! Form::open(['route'=>['registers.update',$user],'method'=>'PUT']) !!}

        {!!  Field::text('name',$user->name,['label'=>'Nombre','placeholder'=>'Ingrese el Nombre']) !!}

        {!!  Field::text('email',$user->email,['label'=>'E-mail','placeholder'=>'Ingrese la descripcion']) !!}

        {!!  Form::submit('Guardar',['class'=>'btn btn-primary']) !!}


    {!! Form::close()!!}
    </div>
    </div>
    <div>
</div>
@endsection

<!-- -->