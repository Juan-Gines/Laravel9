@extends('layouts.plantilla')

@section('title','Contactanos')    


@section('content')
    <h1>Dejanos un mensaje</h1>

    <form action="{{route('contactanos.store')}}" method="post">  
        @csrf
        <label for="">
            Nombre:
            <br>
            <input type="text" name="name">
        </label>
        <br>

        <label for="">
            Correo:
            <br>
            <input type="text" name="correo" id="correo">
        </label>
        <br>

        <label for="">
            Mensaje:
            <br>
            <textarea name="mensaje" id="mensaje" cols="30" rows="4"></textarea>
        </label>
        <br>
        <button>Enviar mensaje</button>
    </form>
@endsection
    
