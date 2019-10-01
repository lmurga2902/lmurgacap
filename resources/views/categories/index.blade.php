@extends('layouts.app')
@section('content')

<!-- <div class="alert alert-primary" role="alert">
  This is a primary alert—check it out!
</div> -->

<div class="container">

    <div class="card">
    <div class="card-header bg-primary text-white">
        Lista de Categorías
    </div>
    <div class="card-body">
        <h5 class="card-title">Titulo de Categorias</h5>
        <p class="card-text">No seas sapo >< El q lo lea está gord@ !!</p>
        <a href="{{route('categories.create') }}" class="btn btn-primary">AGREGAR</a>
        <hr/>
        {!! Form::open(['method'=>'GET','route'=>'categories.index']) !!}
        {!! Form::text('filter',null,['class'=>'form-control','placeholder'=>'Buscar nombre de categoría']) !!}
        {!! Form::close() !!}
        <hr/>
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>SLUG</th>
                    <th>DESCRIPCION</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                @forelse($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->slug }}</td>
                    <td>{{ $category->description }}</td>
                    <td>
                        {!! Form::open(['route'=>['categories.destroy',$category],'method'=>'DELETE','onsubmit'=>'return confirm("Estás seguro que quieres eliminar?")']) !!}
                        
                        <a class="btn btn-primary" href="{{route('categories.edit',$category)}}">EDITAR</a>
                    
                         {!!Form::submit('ELIMINAR',['class'=>'btn btn-danger'])!!}

                         {!! Form::close() !!}
                    </td>
                </tr>
                @empty
                <tr><td colspan="4"> NO HAY REGISTROS </td></tr>
                @endforelse
            </tbody>
        </table>
       {!! $categories->render() !!}

    </div>
    </div>

</div>
@endsection