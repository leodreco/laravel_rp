<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticuloController extends Controller
{
    public function lista_blanca(){
        return view('articulo.lista-blanca');
    }
}
