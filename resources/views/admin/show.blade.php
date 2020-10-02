@extends('template.app')

@section('title','Usuario')

@section('content')

<h1>Noticia<h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Materia</th>
                <th>Açao</th>
            </tr>
        </thead>
        <tbody>       
            <tr>
                <td>{{ $usuario->name }}</td>
                <td>{{ $usuario->email }}</td>
                <td><a href="{{ route('admin.edit',$usuario->id) }}" class='btn btn-danger'>Editar</a></td>
            </tr>
           
        </tbody>
    </table>
    <form action="{{ route('admin.destroy',$usuario->id) }}" method="POST">
        @method('DELETE')
        @csrf
    <button type="submit" class="btn btn-danger">Deletar Noticia</button>
    </form>

@endsection