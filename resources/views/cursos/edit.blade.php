@extends('layouts.plantilla')

@section('title','Creación cursos')    


@section('content')
    <h1>En esta página podrás editar un curso</h1>
    <form action="{{route('cursos.update',$curso)}}" method="POST">
        @csrf
        @method('put')        
        <label for="name">
            Nombre:
            <br>
            <input type="text" name="name" id="name" value="{{old('name',$curso->name)}}">
        </label>
        <br>

        @error('name')            
            <small>*{{$message}}</small>
            <br>
        @enderror
        
        <label for="descripcion">
            Descripcion: 
            <br>
            <textarea name="descripcion" id="descripcion">{{old('descripcion',$curso->descripcion)}}</textarea>
        </label>
        <br>

        @error('descripcion')            
            <small>*{{$message}}</small>
            <br>
        @enderror

        <label for="categoria">
            Categoria:
            <br>
            <input type="text" name="categoria" id="categoria" value="{{old('categoria',$curso->categoria)}}">
        </label>
        <br>

        @error('categoria')            
            <small>*{{$message}}</small>
            <br>
        @enderror

        <button>Enviar curso</button>
    </form>
@endsection   
