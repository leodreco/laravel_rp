@extends('layouts.master')

@section('title', 'Cliente | '.$cliente->nombre)

@section('css')
<style>
    .table tbody td{
        padding-top: 9px;
        padding-bottom: 9px;
    }
    .table tbody td button{
        height: 30px;
        width: 30px;
    }
    .table tbody td button i{
        font-size: 20px;
    }
    .table tbody tr{
        font-size: 15px;
    }
    .table-hover tbody tr:hover{
        background-color: rgb(0 0 0 / 0.25);
    }
    
    /*Estilos botoones show y edit*/
    .table tbody tr td.button-cell{
        position: relative;
        cursor: pointer;
    }
    .table tbody  td > .btn.show,
    .table tbody  td > .btn.edit{
        top: 0;
        right: 0;
        position: absolute;
        height: 20px;
        width: 20px;
        padding: 1px;
    }
    .table tbody  td > .btn.show i,
    .table tbody  td > .btn.edit i{
        font-size: 15px;
    }
    
    
    .cd-bg-detalle{
        -webkit-box-shadow: 0px 0px 9px -1px rgba(163,161,163,1);
        -moz-box-shadow: 0px 0px 9px -1px rgba(163,161,163,1);
        box-shadow: 0px 0px 9px -1px rgba(163,161,163,1);
    }
    .select2-container{
        width:100% !important;
    }
    .rs-w{
        width:100% !important;
    }
    .select2-container--default .select2-selection--single{
        height: 35px;
        border-radius: 0px 2px 2px 0px;
        border: 1px solid #ced4da;
    }
    .table td, .table th{
        /*border:0 !important;*/
    }
    
    .material-icons{
        font-size: 27px;
    }
    .heladero{ background:#ffff35; }.empleado{ background:#67ece6; }.minima{ background:#ffd17c; }.vendedor{ background:#5ff95f }
    .labor{
        text-decoration:none !important;
        color:black;
    }
    
    /*=============Modal direcciones=====================*/
    
    #direcciones #iframeDireccones{
        width: 100%;
        min-height: 600px;
    }
    #modal_mapa iframe{
        width: 100%;
        height: 780px;
        border-radius:5px;
        border:none;
        -webkit-box-shadow: 0px 0px 13px -5px rgba(31,31,31,1);
        -moz-box-shadow: 0px 0px 13px -5px rgba(31,31,31,1);
        box-shadow: 0px 0px 13px -5px rgba(31,31,31,1);
    }
    #direcciones .table tbody td:nth-child(3){
        padding-top: 5px;
        padding-bottom: 0;
    }
    .modal-full {
        min-width: 98%;
        margin-left: 80;
    }
    .close{
        font-size 18px !important;
    }
    
</style>
@livewireStyles
@endsection

@section('breadcrumb')
<h3>{{ $cliente->nombre}}</h3>
<ol class="breadcrumb" id="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Operaciones</a></li>
    <li class="breadcrumb-item"><a href="/operaciones/cliente">Cliente</a></li>
    <li class="breadcrumb-item active"><a href="#">{{ $cliente->nombre }}</a></li>
</ol>
@endsection

@section('content')
<div class="row px-3">
    <ul class="col-12 nav nav-tabs nav-fill" role="tab-list" id="tabs">
        <li class="nav-item active">
            <a class="nav-link active" id="resumen-tab" data-toggle="tab" href="#resumen" role="tab" aria-selected="true">Resumen</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="direcciones-tab" data-toggle="tab" href="#direcciones" role="tab" aria-selected="false">Direcciones</a>
        </li>
         <li class="nav-item">
            <a class="nav-link" id="divisiones-tab" data-toggle="tab" href="#divisiones" role="tab" aria-selected="false">Divisiones</a>
        </li>
         <li class="nav-item">
            <a class="nav-link" id="mesa-tab" data-toggle="tab" href="#mesa" role="tab" aria-selected="false">Mesa</a>
        </li>
         <li class="nav-item">
            <a class="nav-link" id="documentos-tab" data-toggle="tab" href="#documentos" role="tab" aria-selected="false">Documentos</a>
        </li>
         <li class="nav-item">
            <a class="nav-link" id="pedidos-tab" data-toggle="tab" href="#pedidos" role="tab" aria-selected="false">Pedidos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pedidos-sap-tab" data-toggle="tab" href="#pedidos-sap" role="tab" aria-selected="false">Pedidos SAP</a>
        </li>
         <li class="nav-item">
            <a class="nav-link" id="cxc-tab" data-toggle="tab" href="#cxc" role="tab" aria-selected="false">CxC</a>
        </li>
         <li class="nav-item">
            <a class="nav-link" id="ventas-tab" data-toggle="tab" href="#ventas" role="tab" aria-selected="false">Ventas</a>
        </li>
         <li class="nav-item">
            <a class="nav-link" id="nc-tab" data-toggle="tab" href="#nc" role="tab" aria-selected="false">Nc</a>
        </li>
    </ul>
    <div class="col-12 tab-content border-right border-left border-bottom pt-4">
        <div class="tab-pane fade show active" id="resumen" role="tabpanel" aria-labelledby="tab resumen">
            <livewire:cliente.resumen :cliente="$cliente"/>
        </div>
        
        <div class="tab-pane fade" id="direcciones" role="tabpanel" aria-labelledby="tab direcciones">
            <livewire:cliente.direcciones :cliente="$cliente"/>
        </div>
        
        <div class="tab-pane fade" id="divisiones" role="tabpanel" aria-labelledby="tab divisiones">
            <livewire:cliente.divisiones/>
        </div>
        
        <div class="tab-pane fade" id="mesa" role="tabpanel" aria-labelledby="tab mesa">
            <livewire:cliente.mesa/>
        </div>
        
        <div class="tab-pane fade" id="documentos" role="tabpanel" aria-labelledby="tab documentos">
            <livewire:cliente.documentos/>
        </div>
        
        <div class="tab-pane fade" id="pedidos" role="tabpanel" aria-labelledby="tab pedidos">
            <livewire:cliente.pedidos/>
        </div>
        
        <div class="tab-pane fade" id="pedidos-sap" role="tabpanel" aria-labelledby="tab pedidos-sap">
            <livewire:cliente.pedidos-sap/>
        </div>
        <div class="tab-pane fade" id="cxc" role="tabpanel" aria-labelledby="tab cxc">
            <livewire:cliente.cxc/>
        </div>
        
        <div class="tab-pane fade" id="ventas" role="tabpanel" aria-labelledby="tab ventas">
            <livewire:cliente.ventas/>
        </div>
        <div class="tab-pane fade" id="nc" role="tabpanel" aria-labelledby="tab nc">
            <livewire:cliente.nc/>
        </div>
    </div>
</div>
@endsection

@section('modals')

<!-- MODAL RESUMEN > Nombre -->
<div class="modal fade" id="info-general-nombre" tabindex="-1" role="dialog" aria-labelledby="info-general-nombre-Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">{{ $cliente->nombre }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">X</span>
        </button>
      </div>
      
      <div class="modal-body">
        <div class="row">
            <div class="col-md-12 mb-4 text-center">
                <!--<div class="card">-->
                <!--    <div class="card-body cd-bg-detalle text-center">-->
                        <div class="row">
                            <div class="col-md-3 mb-1"> <a href="#" class="labor"> <div class="card heladero">Heladero?</div></a> </div>
                            <div class="col-md-3 mb-1"> <a href="#" class="labor"> <div class="card empleado">Empleado?</div></a> </div>
                            <div class="col-md-3 mb-1"> <a href="#" class="labor"> <div class="card minima">Minimayorista?</div></a> </div>
                            <div class="col-md-3 mb-1"> <a href="#" class="labor"> <div class="card vendedor">Vendedor?</div></a> </div>
                        </div>
                <!--    </div>-->
                <!--</div>-->
            </div>
            <div class="col-md-6 mb-4">
                <div class="card cd-bg-detalle">
                    <div class="card-body">
                
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text">{{ $cliente->cod }}</div>
                            </div>
                            <select class="custom-select mr-sm">
                                <option value="" selected>Activo</option>
                                <option value="">Inactivo</option>
                            </select>
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text">Tipo de Persona</div>
                            </div>
                            <select class="custom-select mr-sm" disabled style="background:white !important">
                                <option value="" selected>JURÍDICA</option>
                            </select>
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text">Documento</div>
                            </div>
                            <select class="custom-select mr-sm-2">
                                <option value="" selected>Otros tipos de documentos</option>
                                <option value="" >DNI</option>
                                <option value="" >Carnet de extranjería</option>
                                <option value="" >RUC</option>
                                <option value="" >Pasaporte</option>
                            </select>
                            <input type="text" class="form-control"  value="{{$cliente->ruc}}" disabled style="background:white !important">
                            <a href="http://e-consultaruc.sunat.gob.pe/cl-ti-itmrconsruc/jcrS03Alias" target="_blank"><img src="https://play-lh.googleusercontent.com/GQledqJp_TWOHXWiYnGjpXvVIDnaHmjxWFwwp2lw7eBJiPNwC6wqpjtO7NAgo3pHCKs" style="height:2rem"></img></a>
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text">Razón Social</div>
                            </div>
                            <input type="text" class="form-control"  value="524234234" disabled style="background:white !important">
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend rs-w">
                              <div class="input-group-text">Tipo de Negocio</div>
                            
                                <select class='mi-selector ' name='marcas'>
                                    <option value='' selected>Mayorista</option>
                                    <option value=''>Kiosco</option>
                                    <option value=''>Licoreria</option>
                                    <option value=''>Ginmasio</option>
                                    <option value=''>Restaurant</option>
                                </select>
                            </div>
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text">Despacho</div>
                            </div>
                            <select class="custom-select mr-sm">
                                <option value="" selected>Envio</option>
                                <option value="">Recojo</option>
                            </select>
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text">Localidad</div>
                            </div>
                            <input type="text" class="form-control" value="Huacachina - Ica Ica Ica" disabled style="background:white !important">
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card cd-bg-detalle">
                    <div class="card-body">
                        <div class="container-fluid p-0">
                            <table style="width:100%" class="table tb-noborde">
                                <tr data-toggle="tooltip" data-placement="top" data-title="Nombre comercial">
                                    <td class="icon"><span class="material-icons">person</span></td>
                                    <td><input type="text" class="form-control"  value="{{ $cliente->nombre }}" disabled style="background:white !important"></td>
                                </tr>
                                
                                <tr data-toggle="tooltip" data-placement="top" data-title="Contacto">
                                    <td class="icon"><span class="material-icons">person</span></td>
                                    <td><input type="text" class="form-control"  value="{{ $cliente->nombre }}" disabled style="background:white !important"></td>
                                </tr>
                                
                                <tr data-toggle="tooltip" data-placement="top" data-title="Teléfono">
                                    <td class="icon"><span class="material-icons">call</span></td>
                                    <td><input type="text" class="form-control"  value="" disabled style="background:white !important"></td>
                                </tr>
                                
                                <tr data-toggle="tooltip" data-placement="top" data-title="Celular">
                                    <td class="icon"><span class="material-icons">smartphone</span></td>
                                    <td><input type="text" class="form-control"  value="977917819" disabled style="background:white !important"></td>
                                </tr>
                                
                                <tr data-toggle="tooltip" data-placement="top" data-title="Correo">
                                    <td class="icon"><span class="material-icons">email</span></td>
                                    <td><input type="text" class="form-control"  value="clever.coer09@gmail.com" disabled style="background:white !important"></td>
                                </tr>
                                
                                <tr data-toggle="tooltip" data-placement="top" data-title="Dirección (fiscal)">
                                    <td class="icon"><span class="material-icons">location_on</span></td>
                                    <td><input type="text" class="form-control"  value="Av. Considerable Tortoise 209" disabled style="background:white !important"></td>
                                </tr>
                                
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      
      <div class="modal-footer">
          <button type="submit" class="btn btn-success" data-dismiss="modal">Guardar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
    
<!--MODAL DIRECCION-->
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal mapa" aria-hidden="true" id="modal_mapa">
    <div class="modal-dialog modal-full modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Mapa : <span> </span> | Cliente : {{ $cliente->cod }} </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">X</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8"><iframe></iframe></div>
                    <div class="col-md-4">
                        
                        <div class="card cd-bg-detalle">
                            <div class="card-body">
                                
                                <nav>
                                  <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-direcciones" role="tab" aria-controls="nav-direcciones" aria-selected="true">Direcciones</a>
                                    <a class="nav-item nav-link" id="nav-edit-direcciones-tab" data-toggle="tab" href="#nav-edit-direcciones" role="tab" aria-controls="nav-edit-direcciones" aria-selected="false">Modificar</a>
                                  </div>
                                </nav>
                                
                                <div class="tab-content" id="nav-tabContent">
                                  <div class="tab-pane fade show active" id="nav-direcciones" role="tabpanel" aria-labelledby="nav-direcciones-tab">
                              
                                    <table class="table table-hover table-bordered table-striped">
                                          <tr>
                                              <th>#</th>
                                              <th>Domi</th>
                                              <th>Dirección</th>
                                              <th>Provincia</th>
                                              <th>Distrito</th>
                                          </tr>
                                          <tr>
                                              <td>1</td>
                                              <td>001</td>
                                              <td>Nro. Sn Balneario Hacachina (Hacachina) Ica Ica Ica</td>
                                              <td>Ica</td>
                                              <td>Ica</td>
                                          </tr>
                                     </table>
                                      
                                  </div>
                                     <div class="tab-pane fade" id="nav-edit-direcciones" role="tabpanel" aria-labelledby="nav-edit-direcciones-tab">
                                        <h5>Localidad: </h5>
                                        
                                            <div class="card pt-3 pr-3 pl-3 pb-2 mb-2">
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                      <div class="input-group-text">Tipo</div>
                                                    </div>
                                                    <select class="custom-select mr-sm">
                                                        <option value="" selected>Ciudad</option>
                                                        <option value="">Ciudad</option>
                                                    </select>
                                                </div>
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                      <div class="input-group-text">Zona</div>
                                                    </div>
                                                    <input type="text" class="form-control"  value="Ica" style="background:white !important">
                                                </div>
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                      <div class="input-group-text">Distrito</div>
                                                    </div>
                                                    <input type="text" class="form-control"  value="Ica" style="background:white !important">
                                                </div>
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                      <div class="input-group-text">Provincia</div>
                                                    </div>
                                                    <input type="text" class="form-control"  value="Ica" style="background:white !important">
                                                </div>
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                      <div class="input-group-text">Depto</div>
                                                    </div>
                                                    <input type="text" class="form-control"  value="Ica" style="background:white !important">
                                                </div>
                                            </div>
                                            
                                        <h5>Vía: </h5>
                                        
                                            <div class="card pt-3 pr-3 pl-3 pb-2 mb-2">
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend rs-w">
                                                      <div class="input-group-text">Tipo</div>
                                                    
                                                        <select class='mi-selector ' name='marcas'>
                                                            <option value='' selected disable>Seleccione una opción</option>
                                                            <option value=''>Opcion A</option>
                                                            <option value=''>Opcion B</option>
                                                            <option value=''>Opcion C</option>
                                                            <option value=''>Opcion D</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                      <div class="input-group-text">Nombre</div>
                                                    </div>
                                                    <input type="text" class="form-control"  value="Ica" style="background:white !important">
                                                </div>
                                                
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                      <div class="input-group-text">Núm.</div>
                                                    </div>
                                                    <input type="text" class="form-control"  value="" style="background:white !important">
                                                    
                                                    <div class="input-group-prepend">
                                                      <div class="input-group-text">Cdr.</div>
                                                    </div>
                                                    <input type="text" class="form-control"  value="0" style="background:white !important">
                                                    
                                                    <div class="input-group-prepend">
                                                      <div class="input-group-text">Mz.</div>
                                                    </div>
                                                    <input type="text" class="form-control"  value="" style="background:white !important">
                                                    
                                                    <div class="input-group-prepend">
                                                      <div class="input-group-text">Lt.</div>
                                                    </div>
                                                    <input type="text" class="form-control"  value="" style="background:white !important">
                                                    
                                                    <div class="input-group-prepend">
                                                      <div class="input-group-text">Km.</div>
                                                    </div>
                                                    <input type="text" class="form-control"  value="0" style="background:white !important">
                                                </div>
                                            </div>
                                            
                                        <h5>Grupo: </h5>
                                        
                                            <div class="card pt-3 pr-3 pl-3 pb-2 mb-2">
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend rs-w">
                                                      <div class="input-group-text">Tipo</div>
                                                    
                                                        <select class='mi-selector ' name='marcas'>
                                                            <option value='' selected disable>Seleccione una opción</option>
                                                            <option value=''>Opcion A</option>
                                                            <option value=''>Opcion B</option>
                                                            <option value=''>Opcion C</option>
                                                            <option value=''>Opcion D</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                      <div class="input-group-text">Nombre</div>
                                                    </div>
                                                    <input type="text" class="form-control"  value="Ica" style="background:white !important">
                                                </div>
                                                
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                      <div class="input-group-text">Bloq.</div>
                                                    </div>
                                                    <input type="text" class="form-control"  value="" style="background:white !important">
                                                    
                                                    <div class="input-group-prepend">
                                                      <div class="input-group-text">Piso</div>
                                                    </div>
                                                    <input type="text" class="form-control"  value="0" style="background:white !important">
                                                    
                                                    <div class="input-group-prepend">
                                                      <div class="input-group-text">Int</div>
                                                    </div>
                                                    <input type="text" class="form-control"  value="" style="background:white !important">
                                                    
                                                    <div class="input-group-prepend">
                                                      <div class="input-group-text">Tienda</div>
                                                    </div>
                                                    <input type="text" class="form-control"  value="" style="background:white !important">
                                                    
                                                    <div class="input-group-prepend">
                                                      <div class="input-group-text">Pto</div>
                                                    </div>
                                                    <input type="text" class="form-control"  value="" style="background:white !important">
                                                </div>
                                                
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                      <div class="input-group-text">Sector</div>
                                                    </div>
                                                    <input type="text" class="form-control"  value="" style="background:white !important">
                                                </div>
                                                
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                      <div class="input-group-text">Etapa</div>
                                                    </div>
                                                    <input type="text" class="form-control"  value="" style="background:white !important">
                                                </div>
                                            </div>
                                            
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                              <div class="input-group-text">Referencia</div>
                                            </div>
                                            <input type="text" class="form-control"  value="Nro. Sn Balneario Huacachina (Huacachina) Ica Ica Ica" style="background:white !important">
                                        </div>
                                        
                                        <h5>Polígono: </h5>
                                        
                                            <div class="card pt-3 pr-3 pl-3 pb-2 mb-2">
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                      <div class="input-group-text">Helados</div>
                                                    </div>
                                                    <select class="custom-select mr-sm" disabled>
                                                        <option value="" selected>Huacachina -D</option>
                                                        <option value="">Huacachina -D</option>
                                                    </select>
                                                </div>
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                      <div class="input-group-text">Tradicional</div>
                                                    </div>
                                                    <select class="custom-select mr-sm" disabled>
                                                        <option value="" selected>Ica 17T</option>
                                                        <option value="">Ica 17T</option>
                                                    </select>
                                                </div>
                                                
                                            </div>
                                            
                                            <button type="submit" class="btn btn-success" style="width:100%" > Guardar Cambios </button>
                                        
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Modal detalle-document-->
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal detalle documento" aria-hidden="true" id="modal_detalle_documento">
    <div class="modal-dialog modal-dialog-centered modal-full">
        <livewire:modal.detalle-documento />
    </div>
</div>


<!--Modal maestro articulos-->
<div class="modal fade" tabindex="-1" role="dialog" id="modal_maestro_articulos">
    <div class="modal-dialog modal-dialog-centered modal-full">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Maestro de articulos</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">X</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                
                            
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="total">#</th>
                                        <th>Tipo</th>
                                        <th>Código</th>
                                        <th>Nombre</th>
                                        <th>Inac.</th>
                                        <th>Compra</th>
                                        <th>Venta</th>
                                        <th>Movil</th>
                                        <th>Cod del fabricante</th>
                                        <th>Grupo</th>
                                        <th>Disponible</th>
                                        <th data-toggle="tooltip" data-title="Precio Unitario">Prec.U</th>
                                        <th>Precip.P</th>
                                        <th>Percep?</th>
                                        <th>Min Percep</th>
                                        <th>% Percep</th>
                                        <th>Detract?</th>
                                        <th>Min Detract</th>
                                        <th>% Detract</th>
                                        <th>Inventario</th>
                                        <th>Categoria</th>
                                        <th>Familia</th>
                                        <th>Marca</th>
                                        <th>Línea</th>
                                        <th>++</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>I</td>
                                        <td class="button-cell">
                                            XNES005903
                                            <button class="btn btn-primary show"><i class="material-icons">visibility</i></button>
                                        </td>
                                        <td>Helado Chocochips 5Lt.</td>
                                        <td>N</td>
                                        <td class="button-cell">
                                            SI
                                            <button class="btn btn-warning edit"><i class="material-icons">edit</i></button>
                                        </td>
                                        <td class="button-cell">
                                            NO
                                            <button class="btn btn-warning edit"><i class="material-icons">edit</i></button>
                                        </td>
                                        <td></td>
                                        <td class="button-cell">
                                            NES005903
                                            <button class="btn btn-warning edit"><i class="material-icons">edit</i></button>
                                            <button class="btn btn-primary show"><i class="material-icons">visibility</i></button>
                                        </td>
                                        <td class="button-cell">
                                            Helados
                                            <button class="btn btn-primary show"><i class="material-icons">visibility</i></button>
                                        </td>
                                        <td>0</td>
                                        <td>0.00</td>
                                        <td>0.00</td>
                                        <td class="button-cell">NO<button class="btn btn-warning edit"><i class="material-icons">edit</i></button></td>
                                        <td class="button-cell">0.00<button class="btn btn-warning edit"><i class="material-icons">edit</i></button></td>
                                        <td class="button-cell">0.00<button class="btn btn-warning edit"><i class="material-icons">edit</i></button></td>
                                        <td class="button-cell">NO<button class="btn btn-warning edit"><i class="material-icons">edit</i></button></td>
                                        <td class="button-cell">0.00<button class="btn btn-warning edit"><i class="material-icons">edit</i></button></td>
                                        <td class="button-cell">0.00<button class="btn btn-warning edit"><i class="material-icons">edit</i></button></td>
                                        <td class="button-cell">NO<button class="btn btn-warning edit"><i class="material-icons">edit</i></button></td>
                                        <td class="button-cell"><button class="btn btn-warning edit"><i class="material-icons">edit</i></button></td>
                                        <td class="button-cell"><button class="btn btn-warning edit"><i class="material-icons">edit</i></button></td>
                                        <td class="button-cell">Donofrio<button class="btn btn-warning edit"><i class="material-icons">edit</i></button></td>
                                        <td class="button-cell"><button class="btn btn-warning edit"><i class="material-icons">edit</i></button></td>
                                        <td>NO</td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('templates')
<template id="breadcrumb-item">
    <li class="breadcrumb-item active tab"><a href=""></a></li>
</template>
@endsection

@section('js')
<script>
    const tabs = document.querySelector('#tabs');
    const breadcrumb = document.querySelector('#breadcrumb');
    for(let a of document.querySelectorAll('#tabs li > a')){
        a.addEventListener('click', changeTab);
    }
    
    function changeTab(e){
        if(!!breadcrumb.querySelector('.tab')){
            breadcrumb.removeChild(breadcrumb.querySelector('.tab'));
        }
        
        let item = document.querySelector('#breadcrumb-item').content;
        
        item.querySelector('a').href = e.currentTarget.getAttribute('href');
        item.querySelector('a').textContent = e.currentTarget.textContent;
        
        breadcrumb.appendChild(document.importNode(item, true));
        
        window.location.hash = e.currentTarget.getAttribute('href');
    }
    
    if(window.location.hash != ''){
        tabs.querySelector(window.location.hash+ '-tab').click();
    }
</script>
<script>
    window.addEventListener('hashchange', e => {
        let hash = e.newURL.substring(e.newURL.lastIndexOf('#') + 1, e.newURL.length);
        
        let tab = document.querySelector('#' + hash + '-tab');
        if(!!tab){
            tab.click();
        }
    });
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
</script>
<script>
    $('#table-mesa').DataTable({
        paging: false,
        ordering: false,
        dom: 't'
    });
    setInterval(() => {
        $.fn.dataTable.tables( { visible: true, api: true } ).columns.adjust();
    }, 500)
    
</script>

<script>
    jQuery(document).ready(function($){
        $(document).ready(function() {
            $('.mi-selector').select2();
        });
    });
</script>

@livewireScripts
@endsection