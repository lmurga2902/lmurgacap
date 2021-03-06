@extends('layouts.app')
@section('content')

<div class="container">

    <div class="card">
    <div class="card-header bg-danger text-white">
        Ingreso de Categorías
    </div>
    <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

        {!! Form::open(['route'=>'categories.store','method'=>'POST']) !!}
           {!! Field::text('name',null,['label'=>'Nombre','placeholder'=>'Ingrese el nombre']) !!}
           {!! Field::textarea('description',null,['label'=>'Descripcion','placeholder'=>'Ingrese la descripción']) !!}

           {!! Form::submit('GUARDAR', ['class'=>'btn btn-primary']) !!}
           <a href="{{route('categories.index') }}" class="btn btn-primary">REGRESAR</a>

        {!! Form::close() !!}        

    </div>
    </div>

</div>
@endsection