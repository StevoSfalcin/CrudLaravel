@extends('template.app')

@section('title','Noticias')

@section('content')

<h1>Minhas Noticias<h1>
    <form action="{{ route('noticias.search') }}" method="post" class="form form-inline">
        @csrf
        <input type="text" name="filtro" placeholder="Filtrar:" class="form-control">
        <button type="submit" class="btn btn-info">Pesquisar</button>
    </form>

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
                <td><a href="{{ route('noticias.show',$noticia->id) }}" class='btn btn-success'>Vizualizar</a>
                    <a href="{{ route('noticias.edit',$noticia->id) }}" class='btn btn-danger'>Editar</a></td>
            </tr>
           
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('noticias.create') }}" class='btn btn-success'>Criar Noticia</a>

@endsection