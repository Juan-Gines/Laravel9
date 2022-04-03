@extends('layouts.plantilla')

@section('title','Listado de cursos')    


@section('content')
    <h1>Bienvenido a la página cursos</h1>
    <a href="{{route('cursos.create')}}"><button type="button" class="btn btn-primary">Crear curso</button></a>
    <ul>
        @foreach ($cursos as $curso)
            <li>
                <a href="{{route('cursos.show',$curso)}}">{{$curso->name}}</a>
            </li>
        @endforeach
    </ul>
    {{$cursos->links()}}
@endsection