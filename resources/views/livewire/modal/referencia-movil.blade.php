<div class="modal-content">
    <div class="modal-header">
        <h3>Detalle del documento: Pedido movíl - 7964725</h3>
    </div>
    <div class="modal-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!--<div class="table-responsive">-->
                        <table class="table table-bordered table-striped table-hover" style="width: 100%" id="table_referencia_movil">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Código</th>
                                    <th>Nombre</th>
                                    <th>Unid</th>
                                    <th>Cant x pack</th>
                                    <th>Cantidad</th>
                                    <th>Precio pack</th>
                                    <th>Importte (79.35)</th>
                                    <th>Almacen</th>
                                    <th>Bono</th>
                                    <th>Dif. Cantidad(0)</th>
                                    <th>Dif. Soles(0)</th>
                                    <th><<</th>
                                    <th>>></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="button-cell">
                                        NES005913
                                        <button class="btn btn-primary show"><i class="material-icons">visibility</i></button>
                                    </td>
                                    <td>Helado Tricolor 5Lt.</td>
                                    <td>PQT</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>26.4509</td>
                                    <td>26.45</td>
                                    <td>05AYPR1</td>
                                    <td>-</td>
                                    <td>0</td>
                                    <td>0.0000</td>
                                    <td class="button-cell">PMOV<button class="btn btn-primary show"><i class="material-icons">visibility</i></button></td>
                                    <td class="button-cell">PED<button class="btn btn-primary show"><i class="material-icons">visibility</i></button></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="button-cell">NES005903<button class="btn btn-primary show"><i class="material-icons">visibility</i></button></td>
                                    <td>Helado Chocochips 5Lt.</td>
                                    <td>PQT</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>26.4509</td>
                                    <td>26.45</td>
                                    <td>05AYPR1</td>
                                    <td>-</td>
                                    <td>0</td>
                                    <td>0.0000</td>
                                    <td class="button-cell">PMOV<button class="btn btn-primary show"><i class="material-icons">visibility</i></button></td>
                                    <td class="button-cell">PED<button class="btn btn-primary show"><i class="material-icons">visibility</i></button></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td class="button-cell">NES005914<button class="btn btn-primary show"><i class="material-icons">visibility</i></button></td>
                                    <td>Helado Vainilla 5Lt.</td>
                                    <td>PQT</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>26.4509</td>
                                    <td>26.45</td>
                                    <td>05AYPR1</td>
                                    <td>-</td>
                                    <td>0</td>
                                    <td>0.0000</td>
                                    <td class="button-cell">PMOV<button class="btn btn-primary show"><i class="material-icons">visibility</i></button></td>
                                    <td class="button-cell">PED<button class="btn btn-primary show"><i class="material-icons">visibility</i></button></td>
                                </tr>
                            </tbody>
                        </table>
                    <!--</div>-->
                </div>
            </div>
        </div>
    </div>
</div>

@push('custom-js')
<script>
$('#table_referencia_movil').DataTable({
    responsive: true,
    dom: 't',
    paging: false,
    ordering: false
});
</script>
@endpush