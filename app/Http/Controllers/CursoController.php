<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    //Como convención el controlador va en mayuscula y singular, junto Controller 

    public function index(){
        return view('cursos.index');
    }

    public function create(){
        return view('cursos.create');
    }

    public function show($curso){
        return view('cursos.show',compact('curso'));
    }
}
