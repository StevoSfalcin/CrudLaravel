@extends('template.app')

@section('title','Noticias')

@section('content')

<h1>Noticias<h1>

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
    <a href="" class='btn btn-danger'>Deletar Produto</a>

@endsection