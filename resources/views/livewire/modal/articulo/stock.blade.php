<div class="modal-content" id="modal_articulo_stock_content">
    <div class="modal-header">
        <h3>
            Stock
            <span></span>
        </h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">X</span>
        </button>
    </div>
    <div class="modal-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <table class="table table-hover table-striped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Item</th>
                                <th>Descripción</th>
                                <th>CODMOVIL</th>
                                <th>Almacén</th>
                                <th>Mínimo</th>
                                <th>
                                    Físico
                                    <span></span>
                                </th>
                                <th>
                                    Comprometido
                                    <span></span>
                                </th>
                                <th>
                                    Disponible
                                    <span></span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    COS400303
                                    <button class="btn btn-primary show"><i class="material-icons">visibility</i></button>
                                </td>
                                <td>Mermelada Fresa Hoja Redonda 1Kg</td>
                                <td>400303</td>
                                <td>11CHPR1</td>
                                <td>0.00</td>
                                <td>
                                    83
                                    <button class="btn btn-primary show"><i class="material-icons">visibility</i></button>
                                </td>
                                <td>0</td>
                                <td>83</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>
                                    COS400303
                                    <button class="btn btn-primary show"><i class="material-icons">visibility</i></button>
                                </td>
                                <td>Mermelada Fresa Hoja Redonda 1Kg</td>
                                <td>400303</td>
                                <td>11ICPR1</td>
                                <td>0.00</td>
                                <td>
                                    206
                                    <button class="btn btn-primary show"><i class="material-icons">visibility</i></button>
                                </td>
                                <td>0</td>
                                <td>206</td>
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
    (() => {
        const modal_articulo_stock = $('#modal_articulo_stock_content').closest('.modal');
        var table;
        
        
        modal_articulo_stock.on('show.bs.modal', e => {
             table = initDataTable('#modal_articulo_stock_content table', {
                dataTable: {
                    columnDefs: [
                        {targets: [1, 6], className: 'button-cell'},
                        {targets: [5,6,7,8], className: 'text-center', width: '50px'}
                    ]
                },
                buttonsResponsive: [
                    {index: 1, type: 'href', value: '.btn.show'},
                    {index: 6, type: 'href', value: '.btn.show'}
                ],
                filtro: [
                    {index: [1,2,3,4,5,6,7,8], type:'text'}
                ]
            });
            setTimeout(() => {
                table.columns.adjust();
            }, 500);
        });
        
        
        modal_articulo_stock.on('hidden.bs.modal', e => {
            table.destroy();
            table = undefined;
        });
    })();
</script>
@endpush