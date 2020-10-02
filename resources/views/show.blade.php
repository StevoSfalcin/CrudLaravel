@extends('template.app')

@section('title','Noticias')

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
                <td>{{ $noticia->titulo }}</td>
                <td>{{ $noticia->materia }}</td>
                <td><a href="" class='btn btn-success'>Editar</a></td>
            </tr>
           
        </tbody>
    </table>
    <form action="{{ route('noticias.destroy',$noticia->id) }}" method="POST">
        @method('DELETE')
        @csrf
    <button type="submit" class="btn btn-danger">Deletar Noticia</button>
    </form>

@endsection