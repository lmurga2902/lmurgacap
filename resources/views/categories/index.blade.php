@extends('layouts.app')
@section('content')

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

        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>SLUG</th>
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
                    <td></td>
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