@extends('layouts.master')

@section('title', 'Articulos | Lista blanca')

@section('breadcrumb')
<h3>Lista blanca</h3>
<div class="breadcrumb" id="breadcrumb">
    <a class="breadcrumb__step" href="#">Articulos</a>
    <a class="breadcrumb__step breadcrumb__step--active" href="#">Lista blanca</a>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
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
                @for($i = 0; $i < 30; $i++)
                <tr>
                    <td>{{ $i + 1 }}</td>
                    <td>
                        400303
                        <button class="btn btn-primary show"><i class="material-icons">visibility</i></button>
                    </td>
                    <td>
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
                    <td class="color-s">
                        Permitir
                    </td>
                    <td>
                        2020-11-20
                        <button class="btn btn-warning edit"><i class="material-icons">edit</i></button>
                    </td>
                    <td>2019-10-18 17:04:04</td>
                </tr>
                @endfor
            </tbody>
        </table>
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
            {index: 1, type: 'text'},
            {index: 2, type: 'text'},
            {index: 3, type: 'text'},
            {index: 4, type: 'text'},
            {index: 5, type: 'text'},
            {index: 6, type: 'text'},
            {index: 7, type: 'select', options: ['Permitir']},
            {index: 8, type: 'text'},
            {index: 9, type: 'text'},
        ]
    });
</script>
@endsection