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
    
    #filtros .card-header{
        position: relative;
    }
    #filtros .card-header > button{
        position: absolute;
        right: 10px;
        top: 50%;
        transform: translateY(-50%);
    }
    
    #filtros label{
        margin-bottom: 0px;
    }
    #filtros .form-group{
        margin-bottom: 5px;
    }
    
    #filtros .input-group-text{
        min-width: 105px;
    }
    #filtros .input-group-text, #filtros .form-control{
        font-size: 14px;
    }
    
    .table a.btn{
        height: 30px;
        width: 30px;
    }
    
    .table i.material-icons{
        font-size: 20px;
    }
    .dataTables_wrapper .table thead tr th:nth-child(5), .dataTables_wrapper .table thead tr th:nth-child(6), .dataTables_wrapper .table thead tr th:nth-child(7), .dataTables_wrapper .table thead tr th:nth-child(8),
    .dataTables_wrapper .table thead tr th:nth-child(8), .dataTables_wrapper .table thead tr th:nth-child(1){
        text-align: center;
    }
    .dataTables_wrapper .table tbody tr td:nth-child(5), .dataTables_wrapper .table tbody tr td:nth-child(6), .dataTables_wrapper .table tbody tr td:nth-child(7), .dataTables_wrapper .table tbody tr td:nth-child(8),
    .dataTables_wrapper .table tbody tr td:nth-child(9), .dataTables_wrapper .table tbody tr td:nth-child(1){
        text-align: center;
    }
    /*padding filas con botones*/
    .dataTables_wrapper .table tbody tr td:nth-child(7), .dataTables_wrapper .table tbody tr td:nth-child(9){
        padding-top: 5px;
        padding-bottom: 0;
    }
    .dataTables_wrapper .table thead th {
        font-size: 15px;
    }
    .dataTables_wrapper .table tbody td {
        font-size: 14px;
        padding-top: 10px;
        padding-bottom: 10px;
    }
    .table-hover tbody tr:hover{
        background-color: rgb(0 0 0 / 0.25);
    }
    
    @media(min-width: 1200px){
        .primera-fila{
            max-width: 21%;
        }
        .segunda-fila{
            flex: 0 0 54%;
            max-width: 54%;
        }
    }
    /*Estilos filtros*/
    #buscar-cliente #cantidad{
        position: relative;
    }
    #buscar-cliente #cantidad .btn.btn-danger{
        position: absolute;
        top: 100%;
        left: 0;
        height: 20px;
        width: 20px;
        z-index: 100;
        padding: 2px;
    }
    #buscar-cliente .btn.btn-danger i{
        font-size: 15px;
    }
    
    #buscar-cliente .filtros td{
        padding: 3px;
    }
    #buscar-cliente .filtros .form-control{
        height:auto;
        font-size: 13px;
        padding: 4px;
    }
</style>
@endsection

@section('breadcrumb')

<!--<ol class="breadcrumb" id="breadcrumb">-->
<!--    <li class="breadcrumb-item"><a href="/">Operaciones</a></li>-->
<!--    <li class="breadcrumb-item"><a href="#">Cliente</a></li>-->
<!--</ol>-->
<h3>Buscar Cliente</h3>
<div class="breadcrumb" id="breadcrumb">
    <a class="breadcrumb__step" href="#">Operaciones</a>
    <a class="breadcrumb__step breadcrumb__step--active" href="#">Cliente</a>
</div>
@endsection

@section('content')
<div class="row mb-4 d-none" id="filtros">
    <div class="col-12">
        <div class="card">
            <div class="card-header p-2" data-toggle="collapse" data-target="#filtros-collapse">Filtros<button class="btn btn-primary p-1"><i class="material-icons">expand_more</i></button></div>
            <div class="card-body py-2 collapse" id="filtros-collapse">
                <form id="form-filtros">
                    <div class="row">
                        <div class="form-group col-12 col-sm-6 col-xl-3 order-sm-1 order-xl-1 primera-fila">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        Código
                                    </div>
                                </div>
                                <input type="text" class="form-control" placeholder="CA00000000" name="cod">
                            </div>
                        </div>
                        
                        <div class="form-group col-12 col-sm-12 px-xl-0 col-xl-6 order-sm-3 order-xl-2 segunda-fila">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        Nombre
                                    </div>
                                </div>
                                <input type="text" class="form-control" name="nombre">
                            </div>
                        </div>
                        
                        <div class="form-group col-12 col-sm-6 col-xl-3 order-sm-2 order-xl-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        Negocio
                                    </div>
                                </div>
                                <select class="form-control" name="negocio">
                                    <option value="T">Todo</option>
                                    <option value="B">Bodega</option>
                                    <option value="R">Restaurante</option>
                                    <option value="L">Libreria</option>
                                </select>
                            </div>
                        </div>
                        {{--
                        
                        <!--<div class="form-group col-12 col-lg-6 col-xl-4">-->
                        <!--    <label>Empleados <span class="min">0</span>-<span class="max">30</span></label>-->
                        <!--    <div class="form-control border-0">-->
                        <!--        <div id="slider-range"></div>-->
                        <!--        <input type="hidden" name="min_empleado">-->
                        <!--        <input type="hidden" name="max_empleado">-->
                        <!--    </div>-->
                        <!--</div>-->
                        --}}
                    </div>
                    <div class="row">
                        <div class="form-group col-12 col-sm-6 col-xl-3 order-sm-1 order-xl-1 primera-fila">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <select onchange="changeDniRuc(event);" class="input-group-text" name="tipo_documento">
                                        <option value="dni">DNI</option>
                                        <option value="ruc">RUC</option>
                                    </select>
                                </div>
                                <input type="text" class="form-control" name="documento">
                            </div>
                        </div>
                        
                        <div class="form-group col-12 col-sm-12 px-xl-0 col-xl-6 order-sm-3 order-xl-2 segunda-fila">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        Dirección
                                    </div>
                                </div>
                                <input type="text" class="form-control" name="direccion">
                            </div>
                        </div>
                        
                        <div class="form-group col-12 col-sm-6 col-xl-3 order-sm-2 order-xl-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        Estado
                                    </div>
                                </div>
                                <select class="form-control" name="estado">
                                    <option value="T">Todo</option>
                                    <option value="A">Activo</option>
                                    <option value="I">Inactivo</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-right">
                            <button class="btn btn-primary"><i class="material-icons">search</i></button>
                            <button type="reset" class="btn btn-danger">Limpiar</button>    
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row" id="busqueda_cliente">
    <div class="col-12">
        <table id="buscar-cliente" class="table table-striped table-hover dt-responsive nowrap display" border="1"  rules="none" style="border:solid 1px #e3d2d2">
            <thead>
                <tr>
                    <th id="cantidad"><span>#</span><button class="btn btn-danger"><i class="material-icons">filter_list</i></button></th>
                    <th data-priority="3">Código</th>
                    <th data-priority="1">Nombre</th>
                    <th>Dirección</th>
                    <th class="text-center">RUC / DNI</th>
                    <th class="text-center">Estado</th>
                    <th class="text-center">Tipo Negocio</th>
                    <th class="text-center px-0">Empleado</th>
                    <th class="text-center" data-priority="2">Acciones</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
</div>
@endsection

@section('templates')
<template id="row_filters">
    <tr class="filtros">
        <td>Filtros</td>
        <td>
            <input type="text" class="form-control" placeholder="CA00000000" oninput="rowFilter(event);" name="cod">
        </td>
        <td>
            <input type="text" class="form-control" placeholder="Nombre" oninput="rowFilter(event);" name="nombre">
        </td>
        <td>
            <input type="text" class="form-control" placeholder="Dirección" oninput="rowFilter(event);" name="direccion">
        </td>
        <td>
            <input type="text" class="form-control" placeholder="RUC / DNI" oninput="rowFilter(event);" name="documento">
        </td>
        <td>
            <select class="form-control" onchange="rowFilter_select(event);" name="estado">
                <option value="T">Todo</option>
                <option value="A">Activo</option>
                <option value="I">Inactivo</option>
            </select>
        </td>
        <td>
            <select class="form-control" onchange="rowFilter_select(event);" name="negocio">
                <option value="T">Todo</option>
                <option value="B">Bodega</option>
                <option value="R">Restaurante</option>
                <option value="L">Libreria</option>
            </select>
        </td>
        <td></td>
        <td><button class="btn btn-danger" onclick="clearRowFilter(event);">Limpiar</button></td>
    </tr>
</template>
@endsection

@section('js')
<!--DataTable Init-->
<script>
    var table = $('#buscar-cliente').DataTable({
        processing: true,
        ordering: false,
        serverSide: true,
        ajax: {
            url: '/operaciones/cliente/data',
            dataFilter: function(data){
                var json = JSON.parse(data);
                document.querySelector('#cantidad span').textContent = json.recordsTotal;
                for(let i = 0;i < json.data.length; i++){
                    
                    json.data[i] = [
                        json.data[i].id,
                        json.data[i].cod,
                        json.data[i].nombre,
                        json.data[i].direccion,
                        json.data[i].dni,
                        json.data[i].estado ? 'ACTIVO' : 'INACTIVO',
                        `Bodega
                        <a class="btn btn-warning p-1 ml-1" href="/operaciones/cliente/${json.data[i].id}/show#negocio">
                            <i class="material-icons">edit</i>
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
            <"col-12 col-lg-3"
                <"input-group">
            >
            <"col-lg-2 col-xl-5 text-center d-none d-lg-block"l>
            <"col-12 col-lg-7 col-xl-4"p>
        >
        rt
        `,
        // i
        language: {
            url: 'https://cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json'
        }
    }).on('init', () => {
        let wrapper = document.querySelector('#buscar-cliente_wrapper');
        wrapper.querySelector('.input-group').innerHTML = `
        <input class="form-control" type="text" name="nombre" placeholder="Buscar cliente" id="search">
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
        search.addEventListener('input', e => {
            console.log(e, e.currentTarget.value);
            // if(e.charCode == 13){
                table.search(e.currentTarget.value).draw();
            // }
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
    }).on('preDraw', e => {
        if(btnFiltros.classList.contains('active')){
            table.active = document.activeElement.getAttribute('name');
            table.filtros = document.querySelector('#buscar-cliente .filtros').cloneNode(true);
        }
    }).on('draw', e => {
        if(btnFiltros.classList.contains('active')){
            createRowFilter(table.filtros);
            if(!!table.active){
                let input = document.querySelector(`#buscar-cliente .filtros [name=${ table.active }]`);
                if(!!input){
                    input.focus();
                    input.selectionStart = input.value.length;
                    input.selectionEnd = input.value.length;
                    // input.value = input.value;
                }
            }
        }
    });
    
    $('#buscar-cliente tbody').on( 'click','tr',function(e){
        console.log(e.originalEvent.currentTarget.querySelector('a.btn-primary').click());
    });
</script>
{{--
<!--Slider range-->
<!--<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>-->
<script>
    // $('#slider-range').slider({
    //     range: true,
    //     min: 0,
    //     max: 30,
    //     values: [ 0, 30 ],
    //     slide: (event, ui) => {
    //         let group = event.target.closest('.form-group');
    //         if(ui.handleIndex == 0){
    //             group.querySelector('.min').textContent = ui.value;
    //             group.querySelector('input[name=min_empleado]').value = ui.value;
    //         }else{
    //             group.querySelector('.max').textContent = ui.value;
    //             group.querySelector('input[name=max_empleado]').value = ui.value;
    //         }
    //     }
    // });
</script>
--}}
<!--filtros-->
<script>
    function changeDniRuc(e){
        e.currentTarget.closest('.form-group').querySelector('label').textContent = e.currentTarget.value;
    }
    const formFiltros = document.querySelector('#form-filtros');
    formFiltros.addEventListener('submit', e => {
        e.preventDefault();
        
        table.column(1).search(formFiltros.cod.value);
        table.column(2).search(formFiltros.nombre.value);
        table.column(3).search(formFiltros.direccion.value);
        table.column(4).search(JSON.stringify({
            tipo: formFiltros.tipo_documento.value,
            documento: formFiltros.documento.value
        }));
        table.column(5).search(formFiltros.estado.value);
        // table.column(6).search(JSON.stringify({
        //     min: formFiltros.min_empleado.value,
        //     max: formFiltros.max_empleado.value
        // }));
        table.draw();
        // console.log([
        //   formFiltros.cod.value,
        //   formFiltros.nombre.value,
        //   formFiltros.direccion.value,
        //   formFiltros.tipo_documento.value,
        //   formFiltros.documento.value,
        //   formFiltros.estado.value,
        //   formFiltros.min_empleado.value,
        //   formFiltros.max_empleado.value
        // ]);
    });
    formFiltros.querySelector('button[type=reset]').addEventListener('click', e => {
        
        console.log(e);
        table.column(1).search('');
        table.column(2).search('');
        table.column(3).search('');
        table.column(4).search('');
        table.column(5).search('');
        // table.column(6).search('');
        table.draw();
    });
</script>
<!--filtros en fila tabla-->
<script>
    let btnFiltros = document.querySelector('#cantidad .btn.btn-danger');
    btnFiltros.addEventListener('click', e => {
        if(!!table.body()[0].querySelector('.filtros')){
            e.currentTarget.classList.remove('active');
            table.filtros.remove();
            delete table.filtros;
        }else{
            e.currentTarget.classList.add('active');
            createRowFilter();
        }
        
    });
    function createRowFilter(filtros = undefined){
        if(filtros != undefined){
            // console.log(filtros);
            table.body()[0].prepend(filtros);
            return;
        }
        let row = document.importNode(document.querySelector('#row_filters').content, true);
        table.body()[0].prepend(row);
        table.filtros = table.body()[0].querySelector('.filtros');
    }
    function rowFilter_select(e){
        let oldSelected = e.currentTarget.querySelector('option[selected]');
        if(!!oldSelected){
            oldSelected.removeAttribute('selected');
        }
        e.currentTarget.querySelector(`option[value=${e.currentTarget.value}]`).setAttribute('selected', '');
        rowFilter(e);
    }
    function rowFilter(e){
        let codigo = table.filtros.querySelector('input[name=cod]').value;
        let nombre = table.filtros.querySelector('input[name=nombre]').value;
        let direccion = table.filtros.querySelector('input[name=direccion]').value;
        let documento = table.filtros.querySelector('input[name=documento]').value;
        let estado = table.filtros.querySelector('select[name=estado]').value;
        let negocio = table.filtros.querySelector('select[name=negocio]').value;
        
        console.log(codigo, nombre, direccion, documento, estado, negocio);
        
        table.column(1).search(codigo);
        table.column(2).search(nombre);
        table.column(3).search(direccion);
        table.column(4).search(JSON.stringify({
            tipo: 'dni',
            documento
        }));
        table.column(5).search(estado);
        table.draw();
    }
    function clearRowFilter(){
        table.filtros.querySelector('input[name=cod]').value = '';
        table.filtros.querySelector('input[name=nombre]').value = '';
        table.filtros.querySelector('input[name=direccion]').value = '';
        table.filtros.querySelector('input[name=documento]').value = '';
        
        table.filtros.querySelector('select[name=estado]').value = 'T';
        table.filtros.querySelector('select[name=negocio]').value = 'T';
        table.column(1).search('');
        table.column(2).search('');
        table.column(3).search('');
        table.column(4).search('');
        table.column(5).search('');
        table.draw();
    }
</script>
@endsection
