<style>
    #table-mesa thead tr th:nth-child(6){
        min-width: 290px !important;
    }
    
    #table-mesa tbody tr td:nth-child(2), #table-mesa thead tr th:nth-child(2){
        text-align: center;
    }
    
    #table-mesa tbody tr td:nth-child(3),#table-mesa tbody tr td:nth-child(9){
        cursor: pointer;
    }
    
    
    #table-mesa.table tbody  td > .btn.show,
    #table-mesa.table tbody  td > .btn.edit{
        top: 0;
        right: 0;
        position: absolute;
        height: 15px;
        width: 15px;
        margin-top: 1px;
        margin-right: 1px;
        padding: 1px;
    }
    #table-mesa.table tbody  td > .btn.show i,
    #table-mesa.table tbody  td > .btn.edit i{
        font-size: 11px;
    }
    
</style>
<div class="row">
    <div class="col-12">
        <div class="table-responsive">
            <table class="table table-hover table-bordered table-striped dt-responsive" id="table-mesa" style="width:100%" >
            <thead>
                <tr>
                    <th data-priority="3">#</th>
                    <th data-toggle="tooltip" data-placement="top" title="Domicilio">Dom.</th>
                    <th>Mesa</th>
                    <th class="text-center">Zona</th>
                    <th>Ruta</th>
                    <th data-priority="1">Vendedor</th>
                    <th class="text-center">Día de visita</th>
                    <th class="text-center">Canal</th>
                    <th class="text-center" data-priority="2">
                        Activo
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="activo_edit">
                            <label class="custom-control-label" for="activo_edit"></label>
                        </div>
                    </th>
                    <th class="text-center">Frecuencia</th>
                    <th class="text-center">Almacen</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>001</td>
                    <td class="button-cell">
                        020: GALICA MINORISTA NOR
                        <button class="btn btn-primary show"><i class="material-icons">visibility</i></button>
                    </td>
                    <td class="text-center">PISCO T</td>
                    <td>PISCO 6T</td>
                    <td>PINEDA ANGULO, OMAR RENZO</td>
                    <td class="text-center">MIERCOLES</td>
                    <td class="text-center">MINORISTA</td>
                    <td class="text-center button-cell">
                        <!--<span>NO</span>-->
                        <!--<button class="btn btn-warning edit"><i class="material-icons">edit</i></button>-->
                        <div class="custom-control custom-switch">
                            <input disabled type="checkbox" class="custom-control-input" id="switch1">
                            <label class="custom-control-label" for="switch1"></label>
                        </div>
                    </td>
                    <td class="text-center">SEMANAL</td>
                    <td class="text-center">11CHPR1</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>001</td>
                    <td  class="button-cell">020: FULMINATA
                        <button class="btn btn-primary show"><i class="material-icons">visibility</i></button>
                    </td>
                    <td class="text-center">ICA H</td>
                    <td>AQUIJES/TATE-D</td>
                    <td>PIÑEDA NUÑEZ, JOSE DE GUADALUPE</td>
                    <td class="text-center">MIERCOLES</td>
                    <td class="text-center">MINORISTA</td>
                    <td class="text-center button-cell">
                        <!--<span>NO</span>-->
                        <!--<button class="btn btn-warning edit"><i class="material-icons">edit</i></button>-->
                        <div class="custom-control custom-switch">
                            <input disabled type="checkbox" class="custom-control-input" id="switch2">
                            <label class="custom-control-label" for="switch2"></label>
                        </div>
                    </td>
                    <td class="text-center">SEMANAL</td>
                    <td class="text-center">11ICPR1</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>001</td>
                    <td class="button-cell">022: HISPANICA MINORISTA POR
                        <button class="btn btn-primary show"><i class="material-icons">visibility</i></button>
                    </td>
                    <td class="text-center">PISCO T</td>
                    <td>PISCO 6T</td>
                    <td>AVALOZ MUNAYCO, LUIS ALBERTO</td>
                    <td class="text-center">MIERCOLES</td>
                    <td class="text-center">MINORISTA</td>
                    <td class="text-center button-cell">
                        <!--<span>NO</span>-->
                        <!--<button class="btn btn-warning edit"><i class="material-icons">edit</i></button>-->
                        <div class="custom-control custom-switch">
                            <input disabled type="checkbox" class="custom-control-input" id="switch3">
                            <label class="custom-control-label" for="switch3"></label>
                        </div>
                    </td>
                    <td class="text-center">SEMANAL</td>
                    <td class="text-center">11CHPR1</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>001</td>
                    <td class="button-cell">008: MACEDONICA
                        <button class="btn btn-primary show"><i class="material-icons">visibility</i></button>
                    </td>
                    <td class="text-center">PISCO T</td>
                    <td>PISCO 6T</td>
                    <td>PACHECO VELASQUEZ, MARIA DEL CAR</td>
                    <td class="text-center">MIERCOLES</td>
                    <td class="text-center">MINORISTA</td>
                    <td class="text-center button-cell">
                        <!--<span>NO</span>-->
                        <!--<button class="btn btn-warning edit"><i class="material-icons">edit</i></button>-->
                        <div class="custom-control custom-switch">
                            <input disabled type="checkbox" class="custom-control-input" id="switch4">
                            <label class="custom-control-label" for="switch4"></label>
                        </div>
                    </td>
                    <td class="text-center">SEMANAL</td>
                    <td class="text-center">11CHPR1</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>001</td>
                    <td class="button-cell">012: MACEDONICA MAYORISTA
                        <button class="btn btn-primary show"><i class="material-icons">visibility</i></button>
                    </td>
                    <td class="text-center">PISCO T</td>
                    <td>PISCO 6T</td>
                    <td>ROJAS ASCONA, KRISTIAN ISAAC</td>
                    <td class="text-center">LUNES A SABADO</td>
                    <td class="text-center">MAYORISTA</td>
                    <td class="text-center button-cell">
                        <!--<span>NO</span>-->
                        <!--<button class="btn btn-warning edit"><i class="material-icons">edit</i></button>-->
                        <div class="custom-control custom-switch">
                            <input disabled type="checkbox" class="custom-control-input" id="switch5">
                            <label class="custom-control-label" for="switch5"></label>
                        </div>
                    </td>
                    <td class="text-center">SEMANAL</td>
                    <td class="text-center">11CHPR1</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>001</td>
                    <td class="button-cell">021: HISPANICA MAYORISTA NOR
                        <button class="btn btn-primary show"><i class="material-icons">visibility</i></button>
                    </td>
                    <td class="text-center">PISCO T</td>
                    <td>PISCO 6T</td>
                    <td>MURGUIA PISCONTE, JUAN JOSE</td>
                    <td class="text-center">LUNES A SABADO</td>
                    <td class="text-center">MAYORISTA</td>
                    <td class="text-center button-cell">
                        <!--<span>NO</span>-->
                        <!--<button class="btn btn-warning edit"><i class="material-icons">edit</i></button>-->
                        <div class="custom-control custom-switch">
                            <input disabled type="checkbox" class="custom-control-input" id="switch6">
                            <label class="custom-control-label" for="switch6"></label>
                        </div>
                    </td>
                    <td class="text-center">SEMANAL</td>
                    <td class="text-center">11CHPR1</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>001</td>
                    <td class="button-cell">021: GALICA MAYORISTA NOR
                        <button class="btn btn-primary show"><i class="material-icons">visibility</i></button>
                    </td>
                    <td class="text-center">PISCO T</td>
                    <td>PISCO 6T</td>
                    <td>SARAVIA DE LA CRUZ, SILVA MERCED</td>
                    <td class="text-center">LUNES A SABADO</td>
                    <td class="text-center">MAYORISTA</td>
                    <td class="text-center button-cell">
                        <!--<span>NO</span>-->
                        <!--<button class="btn btn-warning edit"><i class="material-icons">edit</i></button>-->
                        <div class="custom-control custom-switch">
                            <input disabled type="checkbox" class="custom-control-input" id="switch7">
                            <label class="custom-control-label" for="switch7"></label>
                        </div>
                    </td>
                    <td class="text-center">SEMANAL</td>
                    <td class="text-center">11CHPR1</td>
                </tr>
            </tbody>
        </table>
        </div>
    </div>
</div>

@push('custom-js')
<script>
    (() =>{
        const input_mesa_edit = document.querySelectorAll('#table-mesa tbody > tr input[type=checkbox]');
        // for(let input of input_mesa_edit){
        //     input.addEventListener('change', e => {
        //       if(e.currentTarget.checked){
        //           e.currentTarget.closest('td').querySelector('span').textContent = 'SI';
        //       }else{
        //           e.currentTarget.closest('td').querySelector('span').textContent = 'NO';
        //       }
        //     });
        // }
        document.querySelector('#activo_edit').addEventListener('change', e => {
            for(let input of input_mesa_edit){
                input.disabled = !e.currentTarget.checked;
            }
        });
    })();
</script>
@endpush