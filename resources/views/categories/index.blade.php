@extends('layouts.app')
@section('title','Pagina de pruebas')
@section('content')
<div class="container">
    <div class="card">
    <div class="card-header bg-danger text-white">
    <h1>Listas de Categoria</h1>
    </div>
    <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="{{ route('categories.create') }}" class="btn btn-warning">Agregar</a>

        <hr/>

        {!! Form::open(['method'=>'GET','route'=>'categories.index']) !!}
            {!! Form::text('filter',request()->get('filter'),['class'=>'form-control','placeholder'=>'Buscar nombre de categoria']) !!}
        {!! Form::close()!!}
        
     
        <table class="table">
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>SLUG</th>
                <th>ACCION</th>
            </tr>
            @forelse($categories as $dato)
            <tr>
                <td>{{$dato->id}}</td>
                <td>{{$dato->name}}</td>
                <td>{{$dato->slug}}</td>
                <td>
                   {!! Form::open(['route'=>['categories.destroy',$dato],'method'=>'DELETE','onsubmit'=>'return confirm("Esta seguro que quieres eliminar?")'])!!}
                    <a class="btn btn-primary" href="{{route('categories.edit',$dato)}}">Editar</a>
                    {!! Form::submit('ELIMINAR',['class'=>'btn btn-danger'])!!}
                    {!! Form::close() !!}
                </td>
            </tr>
            @empty
            <tr><td colspan="4">NO HAY REGISTRO</td></tr>
            @endforelse            
        </table>
        {!! $categories->render() !!}
    </div>
    </div>
    <div>
</div>
@endsection