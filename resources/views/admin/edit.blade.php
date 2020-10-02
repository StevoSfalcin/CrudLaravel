@extends('template.app')

@section('title','Noticias')

@section('content')

<h1>Noticia<h1>

    <form action="{{ route('noticias.update',$noticia->id) }}" method='post' class='form'>
        @method('PUT')
        @csrf
        <input type="text" name="titulo" value="{{ $noticia->titulo }}"><br><br>
        <input type="text" name="materia" value="{{ $noticia->materia }}"><br>
        <button type="submit" class="btn btn-success">Editar</button>
    </form>
    
    <form action="{{ route('noticias.destroy',$noticia->id) }}" method="POST">
        @method('DELETE')
        @csrf
    <button type="submit" class="btn btn-danger">Deletar Noticia</button>
    </form>

@endsection