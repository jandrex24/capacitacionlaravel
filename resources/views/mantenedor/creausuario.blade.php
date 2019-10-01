@extends('layouts.app')
@section('title','Creacion de Usuario')
@section('content')

<div class="container">
    <div class="card">
    <div class="card-header bg-secondary text-white">
    <h1>Ingreso de Usuario</h1>
    </div>
    <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="{{ route('registers.index') }}" class="btn btn-warning">Lista Empleados</a>

        <hr/>

    {!! Form::open(['route'=>'registers.store','method'=>'POST']) !!}

        {!!  Field::text('name',null,['label'=>'Nombre','placeholder'=>'Ingrese el Nombre']) !!}

        {!!  Field::text('email',null,['label'=>'E-mail','placeholder'=>'Ingrese e-mail']) !!}

        {!!  Field::text('password',null,['label'=>'Password','placeholder'=>'Ingrese password']) !!}

        {!!  Form::submit('Guardar',['class'=>'btn btn-primary']) !!}


    {!! Form::close()!!}
    </div>
    </div>
    <div>
</div>
@endsection

<!-- -->