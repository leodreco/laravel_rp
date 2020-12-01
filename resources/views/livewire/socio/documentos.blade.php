<div class="row">
    <div class="col-12">
        <table class="table table-hover table-striped table-hover table-bordered" id="table_socio_documento">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tipo</th>
                    <th>Número</th>
                    <th>Fecha</th>
                    <th>Proveedor</th>
                    <th>Razón social</th>
                    <th>RUC/DNI</th>
                    <th>Estado</th>
                    <th>Estado 2</th>
                    <th>Dscto <span></span></th>
                    <th>Total <span></span></th>
                    <th>Saldo <span></span></th>
                    <th>Impuesto</th>
                    <th data-priority="1">Número Sunat</th>
                    <th>Condición</th>
                    <th>Vencimiento</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>NC</td>
                    <td class="button-cell">
                        85225
                        <button class="btn btn-primary show"><i class="material-icons">visibility</i></button>
                    </td>
                    <td>2020-11-18</td>
                    <td>PM00000022</td>
                    <td>KIMBE</td>
                    <td>20100152941</td>
                    <td>O</td>
                    <td>C</td>
                    <td>0.00</td>
                    <td class="text-danger">-1871.06</td>
                    <td class="text-danger">-1871.06</td>
                    <td class="text-danger">-285.42</td>
                    <td>TDC/F086-000000000148715</td>
                    <td>Conta</td>
                    <td>2020-11-18</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>NC</td>
                    <td class="button-cell">
                        85225
                        <button class="btn btn-primary show"><i class="material-icons">visibility</i></button>
                    </td>
                    <td>2020-11-18</td>
                    <td>PM00000022</td>
                    <td>KIMBE</td>
                    <td>20100152941</td>
                    <td>O</td>
                    <td>C</td>
                    <td>0.00</td>
                    <td class="text-danger">-1871.06</td>
                    <td class="text-danger">-1871.06</td>
                    <td class="text-danger">-285.42</td>
                    <td>TDC/F086-000000000148715</td>
                    <td>Conta</td>
                    <td>2020-11-18</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>NC</td>
                    <td class="button-cell">
                        85225
                        <button class="btn btn-primary show"><i class="material-icons">visibility</i></button>
                    </td>
                    <td>2020-11-18</td>
                    <td>PM00000022</td>
                    <td>KIMBE</td>
                    <td>20100152941</td>
                    <td>O</td>
                    <td>C</td>
                    <td>0.00</td>
                    <td class="text-danger">-1871.06</td>
                    <td class="text-danger">-1871.06</td>
                    <td class="text-danger">-285.42</td>
                    <td>TDC/F086-000000000148715</td>
                    <td>Conta</td>
                    <td>2020-11-18</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@push('custom-js')
<script>
    const table_socio_documento = initDataTable('#table_socio_documento', {
        dataTable: {
            dom: `<"row"
                <"col-12 col-md-4"l>
                <"col-12 col-md-8"p>
            >rt`,
            columnDefs: [
                {className: 'text-center', width: "40px", targets: [1,7,8,9,14]},
                {targets: 13, width: '350px'}
            ]
        },
        buttonsResponsive : [{index: 2, type: 'href', value: '.btn.show'}],
        filtro: [
            {index: 1, type: 'select', options: [{text: 'NC', value: 'NC'}, {text: 'FA', value: 'FA'}]},
            {index: 2, type: 'text'},
            {index: 3, type: 'text'},
            {index: 4, type: 'text'},
            {index: 5, type: 'text'},
            {index: 6, type: 'text'},
            {index: 7, type: 'select', options: ['O', 'C']},
            {index: 8, type: 'select', options: ['O', 'C']},
            {index: 9, type: 'text'},
            {index: 10, type: 'text'},
            {index: 11, type: 'text'},
            {index: 12, type: 'text'},
            {index: 13, type: 'text'},
            {index: 14, type: 'select', options: ['O', 'C']},
            {index: 15, type: 'text'}
        ]
    });
    
    document.querySelector('#documentos-tab').addEventListener('click', e => {
        setTimeout(() => {
            table_socio_documento.columns.adjust();
        }, 500);
    });
</script>
@endpush