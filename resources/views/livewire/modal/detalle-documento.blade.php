<div class="modal-content">
    <div class="modal-header">
        <h3>Detalle Documento: 56251208 {{ $id_documento }}</h3>
        <!--<input wire:model="id_documento" type="text">-->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">X</span>
        </button>
    </div>
    <div class="modal-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="detalle-tab" data-toggle="tab" href="#detalle" role="tab" aria-controls="detalle" aria-selected="true">Detalle</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="vacio-tab" data-toggle="tab" href="#vacio" role="tab" aria-controls="vacio" aria-selected="false">vacio</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="detalle" role="tabpanel" aria-labelledby="detalle-tab">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="total">#</th>
                                        <th>Código</th>
                                        <th>Nombre</th>
                                        <th>Unid</th>
                                        <th>Cant x Pack</th>
                                        <th>Cant</th>
                                        <th>Precio</th>
                                        <th>Subtotal (67.25)</th>
                                        <th>Descuento (0.00)</th>
                                        <th>Impuesto (12.11)</th>
                                        <th>Total linea (79.35)</th>
                                        <th>Promoción</th>
                                        <th><<</th>
                                        <th>>></th>
                                        <th>Almacén</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td class="button-cell" onclick="togle_modal_maestro_articulos(event);">
                                            NES005903
                                            <button class="btn btn-primary show"><i class="material-icons">visibility</i></button>
                                        </td>
                                        <td>Helado Chocochips 5Lt.</td>
                                        <td>PQT</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>22.4164</td>
                                        <td>22.42</td>
                                        <td>0.0000</td>
                                        <td>4.04</td>
                                        <td>26.45</td>
                                        <td class="button-cell">0
                                            <button class="btn btn-primary show"><i class="material-icons">visibility</i></button>
                                        </td>
                                        <td>Ped</td>
                                        <td></td>
                                        <td>05AYPR!</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>NES005913</td>
                                        <td>Helado Tricolor 5Lt.</td>
                                        <td>PQT</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>22.4164</td>
                                        <td>22.42</td>
                                        <td>0.0000</td>
                                        <td>4.04</td>
                                        <td>26.45</td>
                                        <td>0</td>
                                        <td>Ped</td>
                                        <td></td>
                                        <td>05AYPR!</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>NES005914</td>
                                        <td>Helado Vainilla 5Lt.</td>
                                        <td>PQT</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>22.4164</td>
                                        <td>22.42</td>
                                        <td>0.0000</td>
                                        <td>4.04</td>
                                        <td>26.45</td>
                                        <td>0</td>
                                        <td>Ped</td>
                                        <td></td>
                                        <td>05AYPR!</td>
                                    </tr>
                                </tbody>
                            </table>
                      </div>
                      <div class="tab-pane fade" id="vacio" role="tabpanel" aria-labelledby="vacio-tab">
                          <h2>Falto mostrar en el video !! </h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum, consequuntur! 
                      </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
    
@push('custom-js')
<script>
    function togle_modal_maestro_articulos(e){
        let parentId = e.currentTarget.closest('.modal').id;
        $('#' + parentId).modal('toggle');
        $('#modal_maestro_articulos').modal();
    }
    
    $("#modal_maestro_articulos").on("hidden.bs.modal", function () {
        $('#modal_detalle_documento').modal();
    });
</script>
@endpush