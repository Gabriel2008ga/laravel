<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Principal extends Controller
{
    function index(){
        return view('pagina-principal');
    }

    function sobre(){
        return view('pagina-sobre');
    }
    function contato(){
        return view('pagina-contato');
    }
    
}



