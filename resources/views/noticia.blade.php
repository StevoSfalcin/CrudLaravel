@extends('template.app')

@section('title','Noticias')

@section('content')

<h1>Noticias<h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Materia</th>
                <th>Açoes</th>
            </tr>
        </thead>
        <tbody>
            @foreach($noticias as $noticia)
            <tr>
                <td>{{ $noticia->titulo }}</td>
                <td>{{ $noticia->materia }}</td>
                <td><a href="" class='btn btn-success'>Editar</a><a href="" class='btn btn-danger'>Deletar</a></td>
            </tr>
           
            @endforeach
        </tbody>
    </table>
    <a href="" class='btn btn-success'>Criar Noticia</a>

@endsection