@extends('template.app')

@section('title','Noticias')

@section('content')

<h1>Noticias<h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Materia</th>
            </tr>
        </thead>
        <tbody>
            @foreach($noticias as $noticia)
            <tr>
                <td>{{ $noticia->titulo }}</td>
                <td>{{ $noticia->materia }}</td>
            </tr>
           
            @endforeach
        </tbody>
    </table>

@endsection