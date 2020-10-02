@extends('template.app')

@section('title','Noticias')

@section('content')

<h1>Noticia<h1>

    <form action="{{ route('noticias.store') }}" method='post' class='form'>
        @csrf
        <input type="text" name="titulo" placeholder="titulo da noticia"><br><br>
        <input type="text" name="materia" placeholder="Materia da noticia..."><br>
        
        <button type="submit" class="btn btn-success">Criar Noticia</button>
    </form>

@endsection