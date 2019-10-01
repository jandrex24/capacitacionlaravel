@extends('layouts.app')

@section('content');

<div class="container">
<div class="card">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Proceso para agregar artìculos</h5>
    <p class="card-text">Ingrese la informaciòn necesaria</p>
    <a href="{{route('home')}}" class="btn btn-primary">HOME</a>

    <hr/>

    {!! Form::open(['route'=>'articles.store','files'=>true]) !!}
        {!! Field::text('name',null,['label'=>'Nombre']) !!}
        {!! Field::textarea('descripcion',null,['label'=>'Descripcion','rows'=>4]) !!}
        {!! Field::select('category_id',
                            $categories,
                            null,
                            ['label'=>'Categoria','empty'=>'-'])!!}
    {!! Field::file('resources',['multiple'=>true,'label'=>'Recursos/Imagenes','accept'=>'image/*']) !!}
    {!! Form::submit('GUARDAR',['class'=>'btn btn-primary btn-block']) !!}

    {!! Form::close() !!}

  </div>
</div>
</div>


@endsection
