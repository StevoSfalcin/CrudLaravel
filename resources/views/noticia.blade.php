@extends('template.app')

@section('title','Noticias')

@section('content')

<h1>Noticias<h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($noticias as $noticia)
            <tr>
                <td>{{ $noticia->titulo }}</td>
                <td>{{ $noticia->titulo }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection