<div class="modal-content" id="modal_articulo_ultimos_movimientos_content" style="width:90%">
    <div class="modal-header">
        <h3>
            Movimiento de los ultimos 3 dias para 
            <span>COS400303</span>
        </h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">X</span>
        </button>
    </div>
    <div class="modal-body">
        <table class="table table-hover table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Trans</th>
                    <th>Tipo</th>
                    <th>Num. Doc.</th>
                    <th>Linea</th>
                    <th>Fecha</th>
                    <th>Socio de negocio</th>
                    <th>Almacén</th>
                    <th>
                        Cantidad
                        <span></span>
                    </th>
                    <th>
                        Costo
                        <span></span>
                    </th>
                    <th>
                        Valor
                        <span></span>
                    </th>
                    <th>C. Costo</th>
                </tr>
            </thead>
            <tbody>
                @for($i = 0; $i < 8; $i++)
                <tr>
                    <td>{{ $i + 1 }}</td>
                    <td>32481565</td>
                    <td>Fa Clientes</td>
                    <td>
                        54281863
                        <button class="btn btn-primary show"><i class="material-icons">visibility</i></button>
                    </td>
                    <td>5</td>
                    <td>2020-11-21</td>
                    <td>CL00908577 - YAGUILLO JIMENEZ, PATRICIA CAROLA</td>
                    <td>11CHPR1</td>
                    <td class="text-danger">-3</td>
                    <td>6.59</td>
                    <td class="text-danger">-19.77</td>
                    <td>PIS-VTAT</td>
                </tr>
                @endfor
            </tbody>
        </table>
    </div>
</div>

@push('custom-js')
<script>
    (() => {
        const modal_articulo_ultimos_movimientos = $('#modal_articulo_ultimos_movimientos_content').closest('.modal');
        var table;
        modal_articulo_ultimos_movimientos.on('show.bs.modal', e => {
             table = initDataTable('#modal_articulo_ultimos_movimientos_content table', {
                dataTable: {
                    columnDefs: [
                        {targets: 3, className: 'button-cell'},
                        {targets: [0,5,7,8,9,10,11], className: 'text-center', width: '50px'}
                    ]
                },
                buttonsResponsive: [
                    {index: 3, type: 'href', value: '.btn.show'}
                ],
                filtro: [
                    {index: [1,2,3,4,5,6,7,8,9,10,11], type:'text'}
                ]
            });
            setTimeout(() => {
                table.columns.adjust();
            }, 500);
        });
        
        modal_articulo_ultimos_movimientos.on('hidden.bs.modal', e => {
            table.destroy();
            table = undefined;
        });
    })();
</script>
@endpush