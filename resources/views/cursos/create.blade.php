@extends('layouts.plantilla')

@section('title','Creación cursos')    


@section('content')
    <h1>En esta página podrás crear cursos</h1>
    <form action="{{route('cursos.store')}}" method="POST">
        @csrf         
        <label for="name">
            Nombre:
            <br>
            <input type="text" name="name" id="name" value="{{old('name')}}">
        </label>
        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        
        <label for="descripcion">
            Descripcion: 
            <br>
            <textarea name="descripcion" id="descripcion">{{old('descripcion')}}</textarea>
        </label>
        @error('descripcion')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <label for="categoria">
            Categoria:
            <br>
            <input type="text" name="categoria" id="categoria" value="{{old('categoria')}}">
        </label>
        @error('categoria')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <button>Enviar curso</button>
    </form>
@endsection   
