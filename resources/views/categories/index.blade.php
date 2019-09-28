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
                <td></td>
            </tr>
            @empty
            <tr><td colspan="4">NO HAY REGISTRO</td></tr>
            @endforelse
            {!! $categories->render() !!}
            
        </table>
    </div>
    </div>
    <div>
</div>
@endsection