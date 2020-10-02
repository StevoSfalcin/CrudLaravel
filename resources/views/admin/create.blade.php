@extends('template.app')

@section('title','Criar Usuario')

@section('content')

<h1>Novo Usuario</h1>

    <form action="{{ route('admin.store') }}" method='post' class='form'>
        @csrf
        <input type="text" name="name" placeholder="Nome"><br><br>
        <input type="text" name="email" placeholder="Email"><br>
        <input type="text" name="password" placeholder="Senha"><br>
        
        <button type="submit" class="btn btn-success">Criar Noticia</button>
    </form>

@endsection