@extends('layouts.master')

@section('title', 'Tipos de contribuyente')

@section('breadcrumb')
<h3>Tipos de contribuyente</h3>
<div class="breadcrumb" id="breadcrumb">
    <a class="breadcrumb__step" href="#">Datos maestros</a>
    <a class="breadcrumb__step breadcrumb__step--active" href="#">Tipos de contribuyente</a>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <table class="table table-hover table-striped table-hover table-bordered" id="table_tipos_contribuyente">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Código</th>
                    <th>Descripción</th>
                    <th>Min para percepción</th>
                    <th>% Percepción</th>
                    <th>Min para detracción</th>
                    <th>% Detracción</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>-1</td>
                    <td>General sin RUC</td>
                    <td>
                        1 500.00
                        <button class="btn btn-warning edit"><i class="material-icons">edit</i></button>
                    </td>
                    <td>
                        2.00
                        <button class="btn btn-warning edit"><i class="material-icons">edit</i></button>
                    </td>
                    <td>
                        0.00
                        <button class="btn btn-warning edit"><i class="material-icons">edit</i></button>
                    </td>
                    <td>
                        0.00
                        <button class="btn btn-warning edit"><i class="material-icons">edit</i></button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>0</td>
                    <td>General</td>
                    <td>
                        0.00
                        <button class="btn btn-warning edit"><i class="material-icons">edit</i></button>
                    </td>
                    <td>
                        2.00
                        <button class="btn btn-warning edit"><i class="material-icons">edit</i></button>
                    </td>
                    <td>
                        700.00
                        <button class="btn btn-warning edit"><i class="material-icons">edit</i></button>
                    </td>
                    <td>
                        1.50
                        <button class="btn btn-warning edit"><i class="material-icons">edit</i></button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>1</td>
                    <td>Ag Retención</td>
                    <td>
                        0.00
                        <button class="btn btn-warning edit"><i class="material-icons">edit</i></button>
                    </td>
                    <td>
                        0.00
                        <button class="btn btn-warning edit"><i class="material-icons">edit</i></button>
                    </td>
                    <td>
                        700.00
                        <button class="btn btn-warning edit"><i class="material-icons">edit</i></button>
                    </td>
                    <td>
                        1.50
                        <button class="btn btn-warning edit"><i class="material-icons">edit</i></button>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>2</td>
                    <td>Ag Percepción</td>
                    <td>
                        0.00
                        <button class="btn btn-warning edit"><i class="material-icons">edit</i></button>
                    </td>
                    <td>
                        0.50
                        <button class="btn btn-warning edit"><i class="material-icons">edit</i></button>
                    </td>
                    <td>
                        700.00
                        <button class="btn btn-warning edit"><i class="material-icons">edit</i></button>
                    </td>
                    <td>
                        1.50
                        <button class="btn btn-warning edit"><i class="material-icons">edit</i></button>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>3</td>
                    <td>Ag Percepción</td>
                    <td>
                        0.00
                        <button class="btn btn-warning edit"><i class="material-icons">edit</i></button>
                    </td>
                    <td>
                        0.00
                        <button class="btn btn-warning edit"><i class="material-icons">edit</i></button>
                    </td>
                    <td>
                        700.00
                        <button class="btn btn-warning edit"><i class="material-icons">edit</i></button>
                    </td>
                    <td>
                        0.00
                        <button class="btn btn-warning edit"><i class="material-icons">edit</i></button>
                    </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>4</td>
                    <td>Sector Público</td>
                    <td>
                        0.00
                        <button class="btn btn-warning edit"><i class="material-icons">edit</i></button>
                    </td>
                    <td>
                        0.00
                        <button class="btn btn-warning edit"><i class="material-icons">edit</i></button>
                    </td>
                    <td>
                        0.00
                        <button class="btn btn-warning edit"><i class="material-icons">edit</i></button>
                    </td>
                    <td>
                        0.00
                        <button class="btn btn-warning edit"><i class="material-icons">edit</i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('js')
<script>
    initDataTable('#table_tipos_contribuyente', {
        dataTable: {
            dom: `<"row"
                <"col-12 col-md-4"l>
                <"col-12 col-md-8"p>
            >rt`,
            columnDefs: [
                {className: 'button-cell', targets: [3,4,5,6]},
                {className: 'text-center', width: '60px', targets: [0,1,3,4,5,6]}
                
            ]
        },
        buttonsResponsive : [
            {index: 3, type: 'href', value: '.btn.show'},
            {index: 4, type: 'href', value: '.btn.show'},
            {index: 5, type: 'href', value: '.btn.show'},
            {index: 6, type: 'href', value: '.btn.show'}
        ]
    });
</script>
@endsection