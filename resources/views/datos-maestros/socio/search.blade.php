@extends('layouts.master')

@section('title', 'Datos Maestros - Socio de Negocio')

@section('css')

@endsection

@section('breadcrumb')
<h3>Socio de negocio</h3>
<div class="breadcrumb" id="breadcrumb">
    <a class="breadcrumb__step" href="#">Datos maestros</a>
    <a class="breadcrumb__step breadcrumb__step--active" href="#">Socio de negocio</a>
</div>
@endsection

@section('content')
<div class="row" id="busqueda-socio">
    <div class="col-12">
        <table class="table table-hover table-striped table-hover table-bordered" id="table_busqueda_socio">
            <thead>
                <tr>
                    <th class="count">#</th>
                    <th>Código</th>
                    <th>Tipo</th>
                    <th>Nombre</th>
                    <th>RUC / DNI</th>
                    <th>Trans</th>
                    <th>Persona</th>
                    <th>Ag Ret</th>
                    <th>Cuenta</th>
                    <th>Activo</th>
                    <th>G Impuest</th>
                    <th>T Pago</th>
                    <th>Detract</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td class="button-cell" onclick="hrefAction(event, '.btn.show')">
                        CA00000001
                        <a class="btn btn-primary show" href="/datos-maestros/socio/1"><i class="material-icons">visibility</i></a>
                    </td>
                    <td>C</td>
                    <td>Valenza Araos, Gloria Lastenia</td>
                    <td>31005453</td>
                    <td>N</td>
                    <td>TPN</td>
                    <td></td>
                    <td>1831010</td>
                    <td>Si</td>
                    <td>IGV</td>
                    <td>Contado</td>
                    <td>N</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td class="button-cell" onclick="hrefAction(event, '.btn.show')">
                        CA00000001
                        <a class="btn btn-primary show" href="/datos-maestros/socio/2"><i class="material-icons">visibility</i></a>
                    </td>
                    <td>C</td>
                    <td>Valenza Araos, Gloria Lastenia</td>
                    <td>31005453</td>
                    <td>N</td>
                    <td>TPN</td>
                    <td></td>
                    <td>1831010</td>
                    <td>Si</td>
                    <td>IGV</td>
                    <td>Contado</td>
                    <td>N</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td class="button-cell" onclick="hrefAction(event, '.btn.show')">
                        CA00000001
                        <a class="btn btn-primary show" href="/datos-maestros/socio/3"><i class="material-icons">visibility</i></a>
                    </td>
                    <td>C</td>
                    <td>Valenza Araos, Gloria Qwery</td>
                    <td>31005453</td>
                    <td>N</td>
                    <td>TPN</td>
                    <td></td>
                    <td>1831010</td>
                    <td>Si</td>
                    <td>IGV</td>
                    <td>Contado</td>
                    <td>N</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('js')
<script>
    const table_search = initDataTable('#table_busqueda_socio', {
        dataTable: {
            dom: `<"row"
                <"col-12 col-md-4"l>
                <"col-12 col-md-8"p>
            >rt`,
            columnDefs: [
                {className: 'text-center', width: "40px", targets: [0,2,4,5,6,7,8,9,10,11,12]},
                {width: "130px", targets: 1}
            ]
        },
        buttonsResponsive : [{index: 1, type: 'href', value: '.btn.show'}],
        filtro: [
            {index: 1, type: 'text'},
            {index: 2, type: 'select', options: [{text: 'C', value: 'C'}]},
            {index: 3, type: 'text'},
            {index: 4, type: 'text'},
            {index: 5, type: 'select', options: [{text: 'Si', value: 'S'}, {text: 'No', value: 'N'}]},
            {index: 6, type: 'select', options: ['TPN']},
            {index: 7, type: 'text'},
            {index: 8, type: 'text'},
            {index: 9, type: 'select', options: ['Si', 'No']},
            {index: 10, type: 'select', options: ['Igv']},
            {index: 11, type: 'select', options: ['Contado', 'Credito']},
            {index: 12, type: 'select', options: [{text: 'Si', value: 'S'}, {text: 'No', value: 'N'}]}
        ]
    });
</script>
@endsection