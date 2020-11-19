@extends('layouts.master')

@section('title', 'Operaciones - Cliente')

@section('css')
<style>
    .dataTables_wrapper{
        position: relative;
    }
    .dataTables_wrapper table{
        width: 100% !important;
    }
    
    .dataTables_wrapper i.delete{
        position: absolute;
        top: 7px;
        right: 55px;
        z-index: 100;
        cursor: pointer;
    }
    .dataTables_wrapper .pagination.mobile{
        justify-content: center;
    }
}
</style>
@endsection

@section('breadcrumb')
<h3>Buscar Cliente</h3>
<ol class="breadcrumb" id="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Operaciones</a></li>
    <li class="breadcrumb-item"><a href="#">Cliente</a></li>
</ol>
@endsection

@section('content')
<div class="row" id="busqueda_cliente">
    <div class="col-12">
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
            <tbody></tbody>
        </table>
    </div>
</div>
@endsection

@section('js')
<script>
    var table = $('#buscar-cliente').DataTable({
        ordering: false,
        serverSide: true,
        ajax: {
            url: '/operaciones/cliente/data',
            dataFilter: function(data){
                var json = JSON.parse(data);
                for(let i = 0;i < json.data.length; i++){
                    
                    json.data[i] = [
                        json.data[i].id,
                        json.data[i].cod,
                        json.data[i].nombre,
                        json.data[i].direccion,
                        json.data[i].dni,
                        json.data[i].estado ? 'ACTIVO' : 'INACTIVO',
                        `Bodega
                        <a class="btn btn-primary p-1" href="/operaciones/cliente/${json.data[i].id}/show#negocio">
                            <i class="material-icons">visibility</i>
                        </a>`,
                        json.data[i].empleado,
                        `<a class="btn btn-primary p-1" href="/operaciones/cliente/${json.data[i].id}/show">
                            <i class="material-icons">visibility</i>
                        </a>`
                    ];
                }
                return JSON.stringify(json);
            }
        },
        dom: `
        <"row"
            <"col-12 col-lg-4"
                <"input-group">
            >
            <"col-12 col-lg-8"p>
            <"col-12 d-sm-none pagination-mobile">
        >
        ti
        `,
        language: {
            url: 'https://cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json'
        }
    }).on('init', () => {
        let wrapper = document.querySelector('#buscar-cliente_wrapper');
        wrapper.querySelector('.input-group').innerHTML = `
        <input class="form-control" type="text" name="nombre" placeholder="Buscar SN" id="search">
        <i class="material-icons delete">delete</i>
        <div class="input-group-append">
            <button type="button" class="btn btn-primary py-0 search"><i class="material-icons">search</i></button>
        </div>`;
        // wrapper.querySelector('.pagination-mobile').innerHTML = `
        // <ul class="pagination mobile">
        // <li class="paginate_button page-item previous disabled"><a href="#" class="page-link">Anterior</a></li>
        // <li class="paginate_button page-item next"><a href="#" class="page-link">Siguiente</a></li>
        // </ul>`;
        let search = document.querySelector('#search');
        search.addEventListener('keypress', e => {
            if(e.charCode == 13){
                table.search(e.currentTarget.value).draw();
            }
        });
        search.closest('div').querySelector('button.search').addEventListener('click', e => {
            if(search.value.length > 0){
                tabla.search(search.value).draw();
            }
        });
        search.closest('div').querySelector('i.delete').addEventListener('click', e => {
            search.value = '';
            table.search('').draw();
        });
        setInterval(() => {
            $.fn.dataTable.tables( { visible: true, api: true } ).columns.adjust();
        }, 500)
    });
</script>
@endsection
