@extends('layouts.master')

@section('title', 'Articulos | Promociones')

@section('breadcrumb')
<h3>Promociones</h3>
<div class="breadcrumb" id="breadcrumb">
    <a class="breadcrumb__step" href="#">Articulos</a>
    <a class="breadcrumb__step breadcrumb__step--active" href="#">Promociones</a>
</div>
@endsection

@section('css')
<style type="text/css">
    .badge-success{
        border-radius:8px;
        text-align: center;
        font-weight:500;
    }
    .sel-estado{
        background: #07af07;
        border:none;
        border-radius:8px;
        font-size: 13px;
        color:white;
        font-weight: 500;
    }
    .per{
        background-color: #07af07;
    }
    .den{
        background-color: orange;
    }
    .bor{
        background-color: red;
    }
</style>

@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <table class="table table-hover table-striped table-hover table-bordered" id="table_articulo_promociones">
            <thead>
                <tr>
                    <th>453</th>
                    <th>Origen</th>
                    <th>Proveedor</th>
                    <th>Código</th>
                    <th>Descripción</th>
                    
                    <th>Límite</th>
                    <th>Asig</th>
                    <th>Disp</th>
                    <th>Tipo de Compra</th>
                    <th>Tipo de Boni</th>
                    
                    <th>Activo</th>
                    <th>Desde</th>
                    <th>Asta</th>
                    <th>Clientes</th>
                    <th>Condición Venta</th>
                </tr>
            </thead>
            
            <tbody>
                
                @for($i = 0; $i < 5; $i++)
                <tr>
                    <td>{{ $i + 1 }}</td>
                    <td>Externa</td>
                    <td>FOSFO</td>
                    <td>24854<button class="btn btn-primary show"><i class="material-icons">visibility</i></button></td>
                    <td>Nemo aperiam ab odit magnam harum est molestiae id corporis possimus odio.</td>
                    
                    <td>1000<button class="btn btn-warning edit"><i class="material-icons">edit</i></button></td>
                    <td>0<button class="btn btn-primary show"><i class="material-icons">visibility</i></button></td>
                    <td>10000</td>
                    <td>Producto</td>
                    <td>Producto</td>
                    
                    <td>Si</td>
                    <td>2020-11-26</td>
                    <td> <input type="date" value="2020-11-26"/> </td>
                    <td>No</td>
                    <td>Ambos</td>
                </tr>
                @endfor
                
            </tbody>
            
        </table>
    </div>
</div>
@endsection

@section('js')
<script>
    
    initDataTable('#table_articulo_promociones', {
        dataTable:{
            columnDefs:[
                {targets: [3,5,6], className: 'button-cell'}
            ]
        },
        filtro: [
            {index: [1,2,3,4,5,6,7,8,9,11,12,13,14,15], type: 'text'},
            {index: 10, type: 'select', options: ['Si', 'No']}
        ],
        buttonsResponsive : [
            {index: 3, type: 'href', value: '.btn.show'},
            {index: 5, type: 'href', value: '.btn.edit'},
            {index: 6, type: 'href', value: '.btn.show'}
          ],
    });
    
</script>
@endsection