@extends('layouts.master')

@section('title', 'Articulos | Lista blanca')

@section('breadcrumb')
<h3>Lista blanca</h3>
<div class="breadcrumb" id="breadcrumb">
    <a class="breadcrumb__step" href="#">Articulos</a>
    <a class="breadcrumb__step breadcrumb__step--active" href="#">Lista blanca</a>
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
    <div class="col-md-12 text-center">
        <h5>Artículos con precio especial</h5>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <table class="table table-hover table-striped table-hover table-bordered" id="table_articulo_listaBlanca">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Cod. Movil</th>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Prec. U</th>
                    <th>Prec. Min</th>
                    <th>Costo. U</th>
                    <th>Estado</th>
                    <th>V Hasta</th>
                    <th>Creado</th>
                </tr>
            </thead>
            <tbody>
                @for($i = 0; $i < 2; $i++)
                <tr>
                    <td>{{ $i + 1 }}</td>
                    <td data-toggle="modal" data-target="#modal_articulo_stock">
                        400303
                        <button class="btn btn-primary show"><i class="material-icons">visibility</i></button>
                    </td>
                    <td data-toggle="modal" data-target="#modal_articulo_ultimos_movimientos">
                        COS400303
                        <button class="btn btn-primary show"><i class="material-icons">visibility</i></button>
                    </td>
                    <td>Mermelada fresa roja Redonda 1Kg.</td>
                    <td>
                        7.30
                    </td>
                    <td>
                        7.30
                        <button class="btn btn-warning edit"><i class="material-icons">edit</i></button>
                    </td>
                    <td>
                        6.57
                    </td>
                    <td class="text-center">
                        <select class="sel-estado">
                            <option class="per">Permitido</option>
                            <option class="den">Denegado</option>
                            <option class="bor">Borrado</option>
                        </select>
                    </td>
                    <td>
                        2020-11-20
                        <button class="btn btn-warning edit"><i class="material-icons">edit</i></button>
                    </td>
                    <td>2019-10-18 17:04:04</td>
                </tr>
                @endfor
                @for($i = 2; $i < 5; $i++)
                <tr>
                    <td>{{ $i + 1 }}</td>
                    <td data-toggle="modal" data-target="#modal_articulo_stock">
                        400303
                        <button class="btn btn-primary show"><i class="material-icons">visibility</i></button>
                    </td>
                    <td data-toggle="modal" data-target="#modal_articulo_ultimos_movimientos">
                        COS400303
                        <button class="btn btn-primary show"><i class="material-icons">visibility</i></button>
                    </td>
                    <td>Mermelada fresa roja Redonda 1Kg.</td>
                    <td>
                        7.30
                    </td>
                    <td>
                        7.30
                        <button class="btn btn-warning edit"><i class="material-icons">edit</i></button>
                    </td>
                    <td>
                        6.57
                    </td>
                    <td class="bg-success">
                        Permitir
                    </td>
                    <td>
                        2020-11-20
                        <button class="btn btn-warning edit"><i class="material-icons">edit</i></button>
                    </td>
                    <td>2019-10-18 17:04:04</td>
                </tr>
                @endfor
                
                <tr>
                    <td>5</td>
                    <td data-toggle="modal" data-target="#modal_articulo_stock">
                        400303
                        <button class="btn btn-primary show"><i class="material-icons">visibility</i></button>
                    </td>
                    <td data-toggle="modal" data-target="#modal_articulo_ultimos_movimientos">
                        COS400303
                        <button class="btn btn-primary show"><i class="material-icons">visibility</i></button>
                    </td>
                    <td>Mermelada fresa roja Redonda 1Kg.</td>
                    <td>
                        7.30
                    </td>
                    <td>
                        7.30
                        <button class="btn btn-warning edit"><i class="material-icons">edit</i></button>
                    </td>
                    <td>
                        6.57
                    </td>
                    <!--Linea verde-->
                    <td class="text-center">
                        <span class="badge badge-success">Permitir</span>
                    </td>
                    <!---->
                    <td>
                        2020-11-20
                        <button class="btn btn-warning edit"><i class="material-icons">edit</i></button>
                    </td>
                    <td>2019-10-18 17:04:04</td>
                </tr>
                
                <tr>
                    <td>6</td>
                    <td data-toggle="modal" data-target="#modal_articulo_stock">
                        400303
                        <button class="btn btn-primary show"><i class="material-icons">visibility</i></button>
                    </td>
                    <td data-toggle="modal" data-target="#modal_articulo_ultimos_movimientos">
                        COS400303
                        <button class="btn btn-primary show"><i class="material-icons">visibility</i></button>
                    </td>
                    <td>Mermelada fresa roja Redonda 1Kg.</td>
                    <td>
                        7.30
                    </td>
                    <td>
                        7.30
                        <button class="btn btn-warning edit"><i class="material-icons">edit</i></button>
                    </td>
                    <td>
                        6.57
                    </td>
                    <!--Linea verde-->
                    <td class="text-center">
                        <span class="badge badge-success">Permitir</span>
                    </td>
                    <!---->
                    <td>
                        2020-11-20
                        <button class="btn btn-warning edit"><i class="material-icons">edit</i></button>
                    </td>
                    <td>2019-10-18 17:04:04</td>
                </tr>
                
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('modals')
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal stock de articulo" aria-hidden="true" id="modal_articulo_stock">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <livewire:modal.articulo.stock/>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal stock de articulo" aria-hidden="true" id="modal_articulo_ultimos_movimientos">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <livewire:modal.articulo.ultimos-movimientos/>
    </div>
</div>
@endsection

@section('js')
<script>
    const table_articulo_listaBlanca = initDataTable('#table_articulo_listaBlanca', {
        dataTable: {
            dom: `<"row"
                <"col-12 col-md-4"l>
                <"col-12 col-md-8"p>
            >rt`,
            columnDefs: [
                {className: 'button-cell', targets: [1,2,5,8]}
            ]
        },
        buttonsResponsive : [
            {index: 1, type: 'href', value: '.btn.show'},
            {index: 2, type: 'href', value: '.btn.show'},
            {index: 5, type: 'href', value: '.btn.edit'},
            {index: 8, type: 'href', value: '.btn.edi'}
        ],
        filtro: [
            {index: [1,2,3,4,5,6,8,9], type: 'text'},
            {index: 7, type: 'select', options: ['Permitir']}
        ]
    });
</script>
@endsection