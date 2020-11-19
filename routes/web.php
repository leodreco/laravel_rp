<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Cliente;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});


Route::get('/dashboard', function () {
    return view('dashboard');
});



Route::get('/operaciones/cliente', function () {
    return view('operaciones.cliente');
});

Route::get('/operaciones/cliente/data', function (Request $request) {
    
    if(!isset($request['search'])){
        return response()->json((object)['status' => false]);
    }
    
    if($request['search']['value']){
        
        $clientes = Cliente::where('nombre','like', '%'.$request['search']['value'].'%');
        $recordsFiltered = $clientes->count();
        $clientes = $clientes->skip($request["start"])->take($request["length"])->get();
    }else{
        $recordsFiltered = Cliente::count();
        $clientes = Cliente::skip($request["start"])->take($request["length"])->get();
    }
    
    return response()->json([
        'draw' => $request["draw"],
        'recordsTotal' => 20000,
        'recordsFiltered' => $recordsFiltered,
        'data' => $clientes
    ]);
});

Route::get('/operaciones/cliente/{id}/show', function ($id){
    $cliente = Cliente::findOrFail($id);
    return view('operaciones.cliente.show', compact('cliente'));
});