<div class="row mb-4">
    <div class="col-12 mb-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Información general</h4>
                <div class="container-fluid p-0">
                    <div class="form-group row">
                        <label class="col-12 col-sm-5 col-lg-2">Código</label>
                        <div class="col-12 col-sm-7 col-lg-10">
                            <input class="form-control" type="text" readonly value="{{ $cliente->cod }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-12 col-sm-5 col-lg-2">Tipo</label>
                        <div class="col-12 col-sm-7 col-lg-10">
                            <input class="form-control" type="text" readonly value="Cliente">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-12 col-sm-5 col-lg-2">Empleado</label>
                        <div class="col-12 col-sm-7 col-lg-10">
                            <input class="form-control" type="text" readonly value="{{ $cliente->empleado }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-12 col-sm-5 col-lg-2">Grupo</label>
                        <div class="col-12 col-sm-7 col-lg-10">
                            <input class="form-control" type="text" readonly value="">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-12 col-sm-5 col-lg-2">Nombre</label>
                        <div class="col-12 col-sm-7 col-lg-10">
                            <input class="form-control" type="text" readonly value="{{ $cliente->nombre }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-12 col-sm-5 col-lg-2">Nombre comercial</label>
                        <div class="col-12 col-sm-7 col-lg-10">
                            <input class="form-control" type="text" readonly value="{{ $cliente->nombre }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-12 col-sm-5 col-lg-2">Tipo de persona</label>
                        <div class="col-12 col-sm-7 col-lg-10">
                            <input class="form-control" type="text" readonly value="TPN - Natural">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-12 col-sm-5 col-lg-2">DNI</label>
                        <div class="col-12 col-sm-7 col-lg-10">
                            <input class="form-control" type="text" readonly value="{{ $cliente->dni }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-12 col-sm-5 col-lg-2">Dirección</label>
                        <div class="col-12 col-sm-7 col-lg-10">
                            <input class="form-control" type="text" readonly value="{{ $cliente->direccion }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-12 col-sm-5 col-lg-2 mb-sm-3">Ciudad</label>
                        <div class="col-12 col-sm-7 col-lg-4 mb-sm-3">
                            <input class="form-control" type="text" readonly value="Lima">
                        </div>
                        
                        <label class="col-12 col-sm-5 col-lg-2">Estado</label>
                        <div class="col-12 col-sm-7 col-lg-4">
                            <input class="form-control" type="text" readonly value="{{ $cliente->estado ? 'Acttivo' : 'Inactivo' }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-12 col-lg-6 mb-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Otros</h4>
                
                <div class="container-fluid p-0">
                    <div class="form-group row">
                        <label class="col-12 col-sm-5 col-xl-3">Término de pago</label>
                        <div class="col-12 col-sm-7 col-xl-9">
                            <input class="form-control" type="text" readonly value="{{ $cliente->termino_pago }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12 col-sm-5 col-xl-3">Interes por ret</label>
                        <div class="col-12 col-sm-7 col-xl-9">
                            <input class="form-control" type="text" readonly value=".000000">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12 col-sm-5 col-xl-3">Lista de precio</label>
                        <div class="col-12 col-sm-7 col-xl-9">
                            <input class="form-control" type="text" readonly value="{{ $cliente->lista_precio }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12 col-sm-5 col-xl-3">Total descuento</label>
                        <div class="col-12 col-sm-7 col-xl-9">
                            <input class="form-control" type="text" readonly value=".000000">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12 col-sm-5 col-xl-3">Línea de credito</label>
                        <div class="col-12 col-sm-7 col-xl-9">
                            <input class="form-control" type="text" readonly value=".000000">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12 col-sm-5 col-xl-3">Límite comprome</label>
                        <div class="col-12 col-sm-7 col-xl-9">
                            <input class="form-control" type="text" readonly value=".000000">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12 col-sm-5 col-xl-3">Prioridad</label>
                        <div class="col-12 col-sm-7 col-xl-9">
                            <input class="form-control" type="text" readonly value="{{ $cliente->prioridad }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12 col-sm-5 col-xl-3">Saldo deudor</label>
                        <div class="col-12 col-sm-7 col-xl-9">
                            <input class="form-control" type="text" readonly value=".00">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-text">Contacto</h4>
                <div class="container-fluid p-0">
                    <div class="form-group row">
                        <label class="col-12 col-sm-5 col-xl-3">Télefono 1</label>
                        <div class="col-12 col-sm-7 col-xl-9">
                            <input class="form-control" type="text" readonly value="{{ $cliente->telefono }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12 col-sm-5 col-xl-3">Télefono 2</label>
                        <div class="col-12 col-sm-7 col-xl-9">
                            <input class="form-control" type="text" readonly value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12 col-sm-5 col-xl-3">Celular</label>
                        <div class="col-12 col-sm-7 col-xl-9">
                            <input class="form-control" type="text" readonly value="{{ $cliente->celular }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12 col-sm-5 col-xl-3">Fax</label>
                        <div class="col-12 col-sm-7 col-xl-9">
                            <input class="form-control" type="text" readonly value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12 col-sm-5 col-xl-3">E-mail</label>
                        <div class="col-12 col-sm-7 col-xl-9">
                            <input class="form-control" type="text" readonly value="{{ $cliente->email }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12 col-sm-5 col-xl-3">Web</label>
                        <div class="col-12 col-sm-7 col-xl-9">
                            <input class="form-control" type="text" readonly value="{{ $cliente->web }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12 col-sm-5 col-xl-3">Contacto</label>
                        <div class="col-12 col-sm-7 col-xl-9">
                            <input class="form-control" type="text" readonly value="{{ $cliente->contacto }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12 col-sm-5 col-xl-3">Tipo de entrega</label>
                        <div class="col-12 col-sm-7 col-xl-9">
                            <input class="form-control" type="text" readonly value="2">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12 col-sm-5 col-xl-3">Creado</label>
                        <div class="col-12 col-sm-7 col-xl-9">
                            <input class="form-control" type="text" readonly value="{{ $cliente->created_at }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12 col-sm-5 col-xl-3">Actualizado</label>
                        <div class="col-12 col-sm-7 col-xl-9">
                            <input class="form-control" type="text" readonly value="{{ $cliente->updated_at }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12 col-sm-5 col-xl-3">Usuario</label>
                        <div class="col-12 col-sm-7 col-xl-9">
                            <input class="form-control" type="text" readonly value="{{ $cliente->updated_for }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</div>