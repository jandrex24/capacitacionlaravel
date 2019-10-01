@extends('layouts.app')
@section('title','Pagina de pruebas')
@section('content')
<div class="container">
    <div class="card">
    <div class="card-header bg-dark text-white">
    <h1>Lista de Usuarios</h1>
    </div>
    <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="{{ route('registers.create') }}" class="btn btn-success">Crear</a>

        <hr/>

        {!! Form::open(['method'=>'GET','route'=>'registers.index']) !!}
            {!! Form::text('filter',request()->get('filter'),['class'=>'form-control','placeholder'=>'Buscar Nombre de Usuario']) !!}
        {!! Form::close()!!}
        
     
        <table class="table">
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>MAIL</th>
                <th>ACCION</th>
            </tr>
            @forelse($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                   {!! Form::open(['route'=>['registers.destroy',$user],'method'=>'DELETE','onsubmit'=>'return confirm("Esta seguro que quieres eliminar?")'])!!}
                    <a class="btn btn-primary" href="{{route('registers.edit',$user)}}">Editar</a>
                    {!! Form::submit('ELIMINAR',['class'=>'btn btn-danger'])!!}
                    {!! Form::close() !!}
                </td>
            </tr>
            @empty
            <tr><td colspan="4">NO HAY REGISTRO</td></tr>
            @endforelse   
        </table>
        {!! $users->render() !!}
    </div>
    </div>
    <div>
</div>
@endsection