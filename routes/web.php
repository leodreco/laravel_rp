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

Route::get('/operaciones/cliente/{id}/show', function ($id) {
    $cliente = Cliente::findOrFail($id);
    return view('operaciones.cliente.show', compact('cliente'));
});

Route::get('/operaciones/cliente/data', function (Request $request) {
    
    $output = new Symfony\Component\Console\Output\ConsoleOutput();
    
    $search = null;
    
    if(isset($request['columns'][1]['search']['value'])){
        $codigo = $request['columns'][1]['search']['value'];
        $output->writeln('cod:'.$codigo); // Código
        $search = Cliente::where('cod', 'LIKE', '%'.$codigo);
    }
    
    if(isset($request['columns'][2]['search']['value'])){
        $nombre = $request['columns'][2]['search']['value'];
        $output->writeln('nombre:'.$nombre); // Nombre
        if($search == null){
            $search = Cliente::where('nombre', 'LIKE', '%'.$nombre.'%');
        }else{
            $search = $search->where('nombre', 'LIKE', '%'.$nombre.'%');
        }
    }
    
    if(isset($request['columns'][3]['search']['value'])){
        $direccion = $request['columns'][3]['search']['value'];
        $output->writeln('direccion:'.$direccion); // Dirección
        if($search == null){
            $search = Cliente::where('direccion', 'LIKE', '%'.$direccion.'%');
        }else{
            $search = $search->where('direccion', 'LIKE', '%'.$direccion.'%');
        }
    }
    
    if(isset($request['columns'][4]['search']['value'])){
        $documento = json_decode($request['columns'][4]['search']['value']);
        
        $output->writeln('documento:'.$documento->tipo.' '.$documento->documento); // Documento
        if($documento->documento
        && $documento->tipo == 'dni' || $documento->tipo == 'ruc'){
            if($search == null){
                $search = Cliente::where($documento->tipo, 'LIKE', $documento->documento.'%');
            }else{
                $search = $search->where($documento->tipo, 'LIKE', $documento->documento.'%');
            }
        }
    }
    
    if(isset($request['columns'][5]['search']['value'])){
        $estado = $request['columns'][5]['search']['value'];
        $output->writeln('estado:'.$estado); // Estado
        if($estado == 'A' || $estado == 'I'){
        $est = $estado == 'A' ? true : false;
            if($search == null){
                $search = Cliente::where('estado', $est);
            }else{
                $search = $search->where('estado', $est);
            }
        }
        
    }

    if(isset($request['columns'][6]['search']['value'])){
        $empleados = json_decode($request['columns'][6]['search']['value']);
        if($empleados->min){
            if($search == null){
                $search = Cliente::where('empleado', '>=', $empleados->min);
            }else{
                $search = $search->where('empleado', '>=', $empleados->min);
            }
        }
        if($empleados->max){
            if($search == null){
                $search = Cliente::where('empleado', '<=', $empleados->max);
            }else{
                $search = $search->where('empleado', '<=', $empleados->max);
            }
        }
        // $output->writeln('empleados:'.'min_'.$empleados->min.' max:'.$empleados->max); // Empleados
    }
    
    
    
    
    $totalRecords = Cliente::count();
    if($search != null){
        $recordsFiltered = $search->count();
        $clientes = $search->skip($request["start"])->take($request["length"])->get();
    }else if($request['search']['value']){
        
        $clientes = Cliente::where('nombre','like', '%'.$request['search']['value'].'%');
        $recordsFiltered = $clientes->count();
        $clientes = $clientes->skip($request["start"])->take($request["length"])->get();
    }else{
        $recordsFiltered = $totalRecords;
        $clientes = Cliente::skip($request["start"])->take($request["length"])->get();
    }
    
    return response()->json([
        'draw' => $request["draw"],
        'recordsTotal' => $totalRecords,
        'recordsFiltered' => $recordsFiltered,
        'data' => $clientes
    ]);
});

Route::get('/datos-maestros/socio', function(){
    return view('datos-maestros.socio.search');
});

Route::get('/datos-maestros/socio/{id_socio}', function(){
    return view('datos-maestros.socio.show');
});

Route::get('/datos-maestros/giros-de-negocio', function(){
    return view('datos-maestros.giros-de-negocio');
});