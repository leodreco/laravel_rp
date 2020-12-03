<style>
    .modal-full{
        min-width: 75% !important;
        margin-left: 80;
    }
</style>

<div class="modal-dialog modal-full modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
            <h3>Pedidos de HR: 109303</h3>
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
                                <a class="nav-link active" id="detalle-hr-tab" data-toggle="tab" href="#detalle-hr" role="tab" aria-controls="detalle-hr" aria-selected="true">Detalle-hr</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="vacio-hr-tab" data-toggle="tab" href="#vacio-hr" role="tab" aria-controls="vacio-hr" aria-selected="false">vacio-hr</a>
                            </li>
                        </ul>
                        
                        <div class="tab-content" id="myTabContent">
                          <div class="tab-pane fade show active" id="detalle-hr" role="tabpanel" aria-labelledby="detalle-hr-tab">
                              <div class="table-responsive">
                                <table class="table table-bordered display" id="table_hoja_reparto" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>N Móvil</th>
                                            <th>Número SAP</th>
                                            <th>Cliente</th>
                                            <th>Razón Social</th>
                                            <th>Cancel</th>
                                            <th>Estado</th>
                                            <th>Facturado</th>
                                            <th>Importe (8, 592,16)</th>
                                            <th>Fecha</th>
                                            <th>Conducción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>NES005903</td>
                                            <td>Helado Chocochips 5Lt.</td>
                                            <td>PQT</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>22.4164</td>
                                            <td>22.42</td>
                                            <td>0.0000</td>
                                            <td>4.04</td>
                                            <td>26.45</td>
                                        </tr>
                                        <tr>
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
                                        </tr>
                                        <tr>
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
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="vacio-hr" role="tabpanel" aria-labelledby="vacio-hr-tab">
                              <h2>Falto mostrar en el video !! </h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum, consequuntur! 
                          </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('custom-js')
<script type="text/javascript">
$('#example thead tr').clone(true).appendTo( '#example thead' );
$('#example thead tr:eq(1) th').each( function (i) {
    var title = $(this).text();
    $(this).html( '<input type="text" placeholder="..." />' );

    $('input',this).on('keyup change',function (){
        if( table.column(i).search() !== this.value){
            table.column(i).search( this.value ).draw();
        }
    });
});
 
$('#table_hoja_reparto').DataTable({
    responsive: true,
    dom: 't',
    paging: false,
    ordering: false
});
</script>
@endpush
