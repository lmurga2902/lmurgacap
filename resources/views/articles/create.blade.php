@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            Agregar Artículos
        </div>
        <div class="card-body">
            <h5 class="card-title">Proceso para agregar artículos</h5>
            <p class="card-text">Ingrese la información necesaria</p>
            <a href="{{route('home')}}" class="btn btn-primary">HOME</a>
            <hr/>
            {!! Form::open(['route'=>'articles.store','files'=>true]) !!}
            {!! Field::text('name',null,['label'=>'Nombre','placeholder'=>'Ingrese el nombre']) !!}
            {!! Field::textarea('description',null,['label'=>'Descripcion','placeholder'=>'Ingrese la descripción','rows'=>4]) !!}
            {!! Field::select('category_id', $categories, null, ['label'=>'Categoría','empty'=>' -SELECCIONE-']) !!}
            {!! Field::file('resources[]',['multiple'=>true,'label'=>'Recursos/Imagenes']) !!}
            {!! Form::submit('GUARDAR', ['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection