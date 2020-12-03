<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticuloController extends Controller
{
    
    // Operaciones
    public function lista_blanca(){
        return view('articulo.operaciones.lista-blanca');
    }
    
    public function promociones(){
        return view('articulo.operaciones.promociones');
    }
    
    public function carga_y_despacho(){
        return view('articulo.operaciones.carga-y-despacho');
    }
    
    public function toma_de_inventario(){
        return view('articulo.operaciones.toma-de-inventario');
    }
    
    public function verificar_precios(){
        return view('articulo.operaciones.verificar-precios');
    }
    
    //Datos Maestros
    public function almacentes(){
        
    }
    public function articulo(){
        
    }
    public function listar_proveedores(){
        
    }
    
    //Informes
    
}
