@extends('layouts.master')

@section('title', 'Operaciones - Cliente')

@section('css')
<style>
    .dataTables_wrapper table{
        width: 100% !important;
    }
</style>
@endsection

@section('breadcrumb')
<ol class="breadcrumb" id="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Operaciones</a></li>
    <li class="breadcrumb-item active"><a href="/">Cliente</a></li>
</ol>
@endsection

@section('content')
<table id="buscar-cliente" class="table table table-striped table-hover dt-responsive nowrap display">
    <thead>
        <tr>
            <th>#</th>
            <th data-priority="3">Código</th>
            <th data-priority="1">Nombre</th>
            <th>Dirección</th>
            <th>RUC/DNI</th>
            <th>Estado</th>
            <th>Tipo Negocio</th>
            <th>Empleado</th>
            <th data-priority="2">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>CD13415H</td>
            <td>Clever</td>
            <td>Av. Los olvidados</td>
            <td>72690060</td>
            <td>Activo</td>
            <td>Bodega</td>
            <td>Pendiente</td>
            <td><a href="detalles.html"><span class="material-icons eye">visibility</span></a></td>
        </tr>
    </tbody>
</table>
@endsection

@section('js')
<script>
    var table = $('#buscar-cliente').DataTable({
        language: {
            url: 'https://cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json'
        },
        dom: `
        <"row"
            <"col-12 col-sm-4 m-auto"
                <"input-group">
            >
            <"col-12 col-sm-8"p>
        >
        ti
        `
    });
    // $.fn.dataTable.tables({ visible: true, api: true }).columns.adjust();
    // table.table().container().classList.add('col-12');
    // table.table().container().classList.add('container_fluid');
</script>
@endsection
