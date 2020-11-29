<div class="row">
    <div class="col-12">
        <table class="table table-hover table-striped table-hover table-bordered" id="table_socio_facura">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Número</th>
                    <th>Almacén</th>
                    <th>Fecha</th>
                    <th>Proveedor</th>
                    <th>RUC</th>
                    <th>Documento</th>
                    <th>Est</th>
                    <th>Importe <span></span></th>
                    <th>Igv <span></span></th>
                    <th>Isc <span></span></th>
                    <th>Dscto <span></span></th>
                    <th>Op. Grav <span></span></th>
                    <th>Op.N.Grav <span></span></th>
                    <th>Op. Exo <span></span></th>
                    <th>Tg <span></span></th>
                    <th>Boni <span></span></th>
                    <th>Impuestos <span></span></th>
                    <th>Frecep</th>
                    <th>Mensaje</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>
                        20030398
                        <button class="btn btn-primary show"><i class="material-icons">visibility</i></button>
                    </td>
                    <td>Alm. Ayacu</td>
                    <td>2020-10-30</td>
                    <td>KIMBERLY-C</td>
                    <td>20100152941</td>
                    <td>F084-01-780800</td>
                    <td>Facurado</td>
                    <td>14 136.46</td>
                    <td>2 156.41</td>
                    <td>0.00</td>
                    <td>307.18</td>
                    <td>11 980.05</td>
                    <td>0.00</td>
                    <td>0.00</td>
                    <td>0.00</td>
                    <td>0.00</td>
                    <td>2 156.41</td>
                    <td>2020-11-04</td>
                    <td>Ok</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>
                        20030398
                        <button class="btn btn-primary show"><i class="material-icons">visibility</i></button>
                    </td>
                    <td>Alm. Ayacu</td>
                    <td>2020-10-30</td>
                    <td>KIMBERLY-C</td>
                    <td>20100152941</td>
                    <td>F084-01-780800</td>
                    <td>Facurado</td>
                    <td>14 136.46</td>
                    <td>2 156.41</td>
                    <td>0.00</td>
                    <td>307.18</td>
                    <td>11 980.05</td>
                    <td>0.00</td>
                    <td>0.00</td>
                    <td>0.00</td>
                    <td>0.00</td>
                    <td>2 156.41</td>
                    <td>2020-11-04</td>
                    <td>Ok</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>
                        20030398
                        <button class="btn btn-primary show"><i class="material-icons">visibility</i></button>
                    </td>
                    <td>Alm. Ayacu</td>
                    <td>2020-10-30</td>
                    <td>KIMBERLY-C</td>
                    <td>20100152941</td>
                    <td>F084-01-780800</td>
                    <td>Facurado</td>
                    <td>14 136.46</td>
                    <td>2 156.41</td>
                    <td>0.00</td>
                    <td>307.18</td>
                    <td>11 980.05</td>
                    <td>0.00</td>
                    <td>0.00</td>
                    <td>0.00</td>
                    <td>0.00</td>
                    <td>2 156.41</td>
                    <td>2020-11-04</td>
                    <td>Ok</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>
                        20030398
                        <button class="btn btn-primary show"><i class="material-icons">visibility</i></button>
                    </td>
                    <td>Alm. Ayacu</td>
                    <td>2020-10-30</td>
                    <td>KIMBERLY-C</td>
                    <td>20100152941</td>
                    <td>F084-01-780800</td>
                    <td>Facurado</td>
                    <td>14 136.46</td>
                    <td>2 156.41</td>
                    <td>0.00</td>
                    <td>307.18</td>
                    <td>11 980.05</td>
                    <td>0.00</td>
                    <td>0.00</td>
                    <td>0.00</td>
                    <td>0.00</td>
                    <td>2 156.41</td>
                    <td>2020-11-04</td>
                    <td>Ok</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>
                        20030398
                        <button class="btn btn-primary show"><i class="material-icons">visibility</i></button>
                    </td>
                    <td>Alm. Ayacu</td>
                    <td>2020-10-30</td>
                    <td>KIMBERLY-C</td>
                    <td>20100152941</td>
                    <td>F084-01-780800</td>
                    <td>Facurado</td>
                    <td>14 136.46</td>
                    <td>2 156.41</td>
                    <td>0.00</td>
                    <td>307.18</td>
                    <td>11 980.05</td>
                    <td>0.00</td>
                    <td>0.00</td>
                    <td>0.00</td>
                    <td>0.00</td>
                    <td>2 156.41</td>
                    <td>2020-11-04</td>
                    <td>Ok</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@push('custom-js')
<script>
    const table_socio_facura = initDataTable('#table_socio_facura', {
        dataTable: {
            dom: `<"row"
                <"col-12 col-md-4"l>
                <"col-12 col-md-8"p>
            >rt`,
            columnDefs: [
                {className: 'button-cell', targets: 1}
            ]
        },
        buttonsResponsive: [{index: 1, type: 'modal', value: '.btn.show'}],
        filtro: [
            {index: 1, type: 'text'},
            {index: 2, type: 'text'},
            {index: 3, type: 'text'},
            {index: 4, type: 'text'},
            {index: 5, type: 'text'},
            {index: 6, type: 'text'},
            {index: 7, type: 'select', options: ['Facurado']},
            {index: 8, type: 'text'},
            {index: 9, type: 'text'},
            {index: 10, type: 'text'},
            {index: 11, type: 'text'},
            {index: 12, type: 'text'},
            {index: 13, type: 'text'},
            {index: 14, type: 'text'},
            {index: 15, type: 'text'},
            {index: 16, type: 'text'},
            {index: 17, type: 'text'},
            {index: 18, type: 'text'},
            {index: 19, type: 'text'}
        ]
    });
    
    document.querySelector('#facturas-tab').addEventListener('click', e => {
        setTimeout(() => {
            table_socio_facura.columns.adjust();
        }, 500);
    });
</script>
@endpush