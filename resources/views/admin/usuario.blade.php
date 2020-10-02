@extends('template.app')

@section('title','admin')

@section('content')

<h1>Todos Usuarios<h1>
    <form action="{{ route('admin.search') }}" method="post" class="form form-inline">
        @csrf
        <input type="text" name="filtro" placeholder="Filtrar:" class="form-control">
        <button type="submit" class="btn btn-info">Pesquisar</button>
    </form>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Açoes</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->name }}</td>
                <td>{{ $usuario->email }}</td>
                <td><a href="{{ route('admin.show',$usuario->id) }}" class='btn btn-success'>Vizualizar</a>
                    <a href="{{ route('admin.edit',$usuario->id) }}" class='btn btn-danger'>Editar</a></td>
            </tr>
           
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('admin.create') }}" class='btn btn-success'>Criar Noticia</a>

@endsection