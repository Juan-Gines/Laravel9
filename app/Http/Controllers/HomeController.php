<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //cuando utilizamos el método __invoke cuando solamente va a tener un método el controlador

    public function __invoke()
    {
        return view('home');
    }
}
