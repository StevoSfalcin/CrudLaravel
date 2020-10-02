@extends('template.app')

@section('title','Editar Usuario')

@section('content')

<h1>usuario<h1>

    <form action="{{ route('admin.update',$usuario->id) }}" method='post' class='form'>
        @method('PUT')
        @csrf
        <input type="text" name="name" value="{{ $usuario->name }}"><br><br>
        <input type="text" name="email" value="{{ $usuario->email }}"><br>
        <button type="submit" class="btn btn-success">Editar</button>
    </form>
    
    <form action="{{ route('admin.destroy',$usuario->id) }}" method="POST">
        @method('DELETE')
        @csrf
    <button type="submit" class="btn btn-danger">Deletar usuario</button>
    </form>

@endsection