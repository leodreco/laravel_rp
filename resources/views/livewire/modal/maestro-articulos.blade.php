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
                    <table class="table table-bordered table-hover table-striped" id="tabla_maestro_articulo" style="width: 100%;">
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

@push('custom-js')
<script>
$('#tabla_maestro_articulo').DataTable({
    responsive: true,
    dom: 't',
    paging: false,
    ordering: false
});
</script>
@endpush