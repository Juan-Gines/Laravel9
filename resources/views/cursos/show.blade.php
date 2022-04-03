@extends('layouts.plantilla')

@section('title',"Curso $curso->name")    


@section('content')
    <h1>Bienvenido al curso {{$curso->name}}</h1>
    <a href="{{route('cursos.index')}}"><button>Volver a cursos</button></a>
    <br>
    <a href="{{route('cursos.edit',$curso)}}"><button>Editar cursos</button></a>
    <p>Categoria: {{$curso->categoria}}</p>
    <p>Descripción: {{$curso->descripcion}}</p>

    <form action="{{route('cursos.destroy',$curso)}}" method="POST">
        @csrf
        @method('delete')
        <button>Eliminar registro</button>
    </form>
@endsection
    
