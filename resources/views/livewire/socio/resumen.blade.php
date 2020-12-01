@push('custom-css')
<style>
*{
    font-size: 15px;
}
    .nav-tab {
    color: white !important;
    background: none !important;
    text-decoration: none;
        
    }
    .tab-pane{
        margin-top: 18px;
    }
    
    .head{
        font-weight: bold;
    }
    
    .cd-bg-detalle{
        -webkit-box-shadow: 0px 0px 9px -1px rgba(163,161,163,1);
        -moz-box-shadow: 0px 0px 9px -1px rgba(163,161,163,1);
        box-shadow: 0px 0px 9px -1px rgba(163,161,163,1);
    }
    
    .icon{
        width: 30px;
        color: #007bff;
    }
    
    .text-de{
        color: rgb(4 38 85);   
    }
    @media(min-width: 1140px){
        /*0 0 16.666667%*/
        #resumen .codigo{
            -ms-flex: 0 0 13%;
            flex: 0 0 13%;
            min-width: 13%;
            max-width: 13%;
        }
        #resumen .direccion{
            -ms-flex: 0 0 41.33%;
            flex: 0 0 41.33%;
            min-width: 41.33%;
            max-width: 41.33%;
        }
        #resumen .estado{
            0 0 16.666667%
            -ms-flex: 0 0 11%;
            flex: 0 0 11%;
            min-width: 11%;
            max-width: 11%;
        }
    }
    #resumen i.href{
        /*position: absolute;*/
        /*top: 15px;*/
        /*right: 30px;*/
        /*cursor: pointer;*/
    }
    #ver{
        float: right;
        cursor: pointer;
        margin-top: 0;
        transform: translate(0px, -33px);
        font-weight: bold;
        color: #19afaf;
    }
    hr{
        background-color: #19afaf;
    }
    table tbody td span{
        color:#19afaf !important;
    }
    .nav-tabs .nav-item{
        color:#00a0a0 ;
        font-weight:500;
    }
    
</style>
@endpush

<div class="row">
    <div class="col-md-8">

        <div class="row">
            <div class="col-md-12 mt-2">
                <div class="card cd-bg-detalle">
                    <div class="card-body">
                        <h4 class="card-title">Información general</h4> <span class="material-icons" id="ver" data-toggle="modal" data-target="#info-general-socio" title="Ver detalle"> visibility </span>
                        <hr>
                        <div class="row">
                            
                            <div class="col-md-2">
                                <span class="head">Código</span><br><span class="text-de">CA00000001</span>
                            </div>
                            <div class="col-md-3">
                                <span class="head">Nombre</span><br><span class="text-de">Berget Chiquia Tan</span>
                            </div>
                            <div class="col-md-3">
                                <span class="head">Nombre comercial</span><br><span class="text-de">Berget Chiquia Tan</span>
                            </div>
                            <div class="col-md-2">
                                <span class="head">DNI/RUC</span><br><span class="text-de">54385601</span>
                            </div>
                            <div class="col-md-2">
                                <span class="head">Estado</span><br><span class="text-de">Activo</span>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-12 mt-4">
                <div class="card cd-bg-detalle">
                    <div class="card-body">
                        <h4 class="card-title">Direcciones</h4>
                        <hr>
                            <div class="row">
                                <div class="col-md-2">
                                    <span class="head">Departamento</span><br><span class="text-de">ICA</span>
                                </div>
                                <div class="col-md-2">
                                    <span class="head">Provincia</span><br><span class="text-de">ICA</span>
                                </div>
                                <div class="col-md-4">
                                    <span class="head">Distrito</span><br><span class="text-de">ICA</span>
                                    </div>
                                <div class="col-md-4">
                                    <span class="head">Dirección</span><br><span class="text-de">
                                </span></div>
                            </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 mt-4 mb-2">
                <div class="card cd-bg-detalle">
                    <div class="card-body">
                        <h4 class="card-title">Otros</h4>
                        <hr>

                        <div class="container-fluid p-0">
                            <div class="row">
                                <div class="col-md-4"><span class="head">Término de Pago</span><br><span class="text-de">Contado</span></div><br>
                                <div class="col-md-8 mb-2"><span class="head">Límite de Comprome</span><br><span class="text-de">012-Lista Gral Minorista</span></div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-4"><span class="head">Lista de Precio</span><br><span class="text-de">012-Lista Gral Minorista</span></div>
                                <div class="col-md-8"><span class="head">Interés por Ret</span><br><span class="text-de">.00000</span></div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-4"><span class="head">Total Descuento</span><br><span class="text-de">.00000</span></div>
                                <div class="col-md-8"><span class="head">Prioridad</span><br><span>-1</span class="text-de"></div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-4"><span class="head">Saldo Deudor</span><br><span class="text-de">.00</span></div>
                                <div class="col-md-8"><span class="head">Línea de Crédito</span><br><span class="text-de">.00000</span></div>
                            </div>
                            <div class="row">
                                <div class="col-md-4"><span class="head">Usuario</span><br><span class="text-de">Manager</span></div>
                            </div>
                            
                        </div>

                    </div>
                </div>
            </div>
        </div>

        
    </div>
    <div class="col-md-4 mt-2 mb-4">
        <div class="card cd-bg-detalle">
            <div class="card-body">
                <div class="card-title">
                    <h4>Contacto</h4>
                </div>
                <hr>
                <div class="container-fluid p-0">
                    <table class="table">
                        <tr data-toggle="tooltip" data-placement="top" data-title="Teléfono 1">
                            <td class="icon"><span class="material-icons">call</span></td>
                            <td>056-229595</td>
                        </tr>
                        
                        <tr data-toggle="tooltip" data-placement="top" data-title="Teléfono 2">
                            <td class="icon"><span class="material-icons">call</span></td>
                            <td></td>
                        </tr>
                        
                        <tr data-toggle="tooltip" data-placement="top" data-title="Celular">
                            <td class="icon"><span class="material-icons">smartphone</span></td>
                            <td>977917819</td>
                        </tr>
                        <tr data-toggle="tooltip" data-placement="top" data-title="Fax">
                            <td class="icon"><span class="material-icons">print</span></td>
                            <td></td>
                        </tr>
                        <tr data-toggle="tooltip" data-placement="top" data-title="Email">
                            <td class="icon"><span class="material-icons">email</span></td>
                            <td>clever.coer09@gmail.com</td>
                        </tr>
                        <tr data-toggle="tooltip" data-placement="top" data-title="Contacto">
                            <td class="icon"><span class="material-icons">person</span></td>
                            <td>CleyMi</td>
                        </tr>
                        <tr data-toggle="tooltip" data-placement="top" data-title="Sition Web">
                            <td class="icon"><span class="material-icons">language</span></td>
                            <td>cleymisoft.com</td>
                        </tr>
                        <tr data-toggle="tooltip" data-placement="top" data-title="Creado">
                            <td class="icon"><span class="material-icons">add</span></td>
                            <td>02/02/2000</td>
                        </tr>
                        <tr data-toggle="tooltip" data-placement="top" data-title="Actualizado">
                            <td class="icon"><span class="material-icons">cached</span></td>
                            <td>02/02/2012</td>
                        </tr>
                        <tr data-toggle="tooltip" data-placement="top" data-title="Usuario">
                            <td class="icon"><span class="material-icons">account_box</span></td>
                            <td>Manager</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>