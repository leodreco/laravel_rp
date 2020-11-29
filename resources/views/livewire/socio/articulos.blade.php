<div class="row">
    <div class="col-12">
        <table class="table table-hover table-striped table-hover table-bordered" id="table_socio_articulos">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tipo</th>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Inac.</th>
                    <th>Compra</th>
                    <th>Venta</th>
                    <th>Móvil</th>
                    <th>Cod. Fabricante</th>
                    <th>Grupo</th>
                    <th>Disponible</th>
                    <th>Prec. U</th>
                    <th>Prec. P</th>
                    <th>Percep?</th>
                    <th>Min Percep</th>
                    <th>% Percep</th>
                    <th>Detract</th>
                    <th>Min Detract</th>
                    <th>% Detract</th>
                    <th>Cat</th>
                    <th>No se ve</th>
                    <th>No se ve</th>
                    <th>Marca</th>
                    <th>Línea</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>I</td>
                    <td>
                        KPC109095
                        <button class="btn btn-primary show"><i class="material-icons">visibility</i></button>
                    </td>
                    <td>2 Pqte Pñ Huggies XG 44 Xtra-Flex + 4 Toa Hum x 16</td>
                    <td>N</td>
                    <td>
                        NO
                        <button class="btn btn-warning edit"><i class="material-icons">edit</i></button>
                    </td>
                    <td>
                        SI
                        <button class="btn btn-warning edit"><i class="material-icons">edit</i></button>
                    </td>
                    <td>109095</td>
                    <td>
                        <button class="btn btn-primary show"><i class="material-icons">visibility</i></button>
                    </td>
                    <td>
                        Tradicional
                    </td>
                    <td>
                        0
                        <button class="btn btn-primary show"><i class="material-icons">visibility</i></button>
                    </td>
                    <td>90.87</td>
                    <td>90.87</td>
                    <td>
                        NO
                        <button class="btn btn-warning edit"><i class="material-icons">edit</i></button>
                    </td>
                    <td><button class="btn btn-warning edit"><i class="material-icons">edit</i></button></td>
                    <td>0.00<button class="btn btn-warning edit"><i class="material-icons">edit</i></button></td>
                    <td>NO<button class="btn btn-warning edit"><i class="material-icons">edit</i></button></td>
                    <td>0.00<button class="btn btn-warning edit"><i class="material-icons">edit</i></button></td>
                    <td>0.00<button class="btn btn-warning edit"><i class="material-icons">edit</i></button></td>
                    <td>SI<button class="btn btn-warning edit"><i class="material-icons">edit</i></button></td>
                    <td><button class="btn btn-warning edit"><i class="material-icons">edit</i></button></td>
                    <td><button class="btn btn-warning edit"><i class="material-icons">edit</i></button></td>
                    <td>
                        HUGGIES
                        <button class="btn btn-warning edit"><i class="material-icons">edit</i></button>
                    </td>
                    <td><button class="btn btn-warning edit"><i class="material-icons">edit</i></button></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@push('custom-js')
<script>
    const table_socio_articulos = initDataTable('#table_socio_articulos', {
        dataTable: {
            dom: `<"row"
                <"col-12 col-md-4"l>
                <"col-12 col-md-8"p>
            >rt`,
            columnDefs: [
                {targets: [2, 5, 6, 8, 10, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23], className: 'button-cell'}
            ]
        },
        buttonsResponsive : [
            {index: 2, type: 'href', value: '.btn.show'},
            {index: 5, type: 'href', value: '.btn.edit'},
            {index: 6, type: 'href', value: '.btn.edit'},
            {index: 8, type: 'href', value: '.btn.show'},
            {index: 10, type: 'href', value: '.btn.show'},
            {index: 13, type: 'href', value: '.btn.edit'},
            {index: 14, type: 'href', value: '.btn.edit'},
            {index: 15,type: 'href', value: '.btn.edit'},
            {index: 16, type: 'href', value: '.btn.edit'},
            {index: 17, type: 'href', value: '.btn.edit'},
            {index: 18, type: 'href', value: '.btn.edit'},
            {index: 19, type: 'href', value: '.btn.edit'},
            {index: 20, type: 'href', value: '.btn.edit'},
            {index: 21, type: 'href', value: '.btn.edit'},
            {index: 22, type: 'href', value: '.btn.edit'},
            {index: 23, type: 'href', value: '.btn.edit'}
        ],
        filtro: [
            {index: 1, type: 'select', options: ['I']},
            {index: 2, type: 'text'},
            {index: 3, type: 'text'},
            {index: 4, type: 'select', options: [{text: 'Si', value: 'S'}, {text: 'No', value: 'N'}]},
            {index: 5, type: 'select', options: [{text: 'Si', value: 'SI'}, {text: 'No', value: 'NO'}]},
            {index: 6, type: 'select', options: [{text: 'Si', value: 'SI'}, {text: 'No', value: 'NO'}]},
            {index: 7, type: 'text'},
            {index: 8, type: 'text'},
            {index: 9, type: 'select', options: ['Tradicional']},
            {index: 10, type: 'text'},
            {index: 11, type: 'text'},
            {index: 12, type: 'text'},
            {index: 13, type: 'select', options: [{text: 'Si', value: 'SI'}, {text: 'No', value: 'NO'}]},
            {index: 14, type: 'select', options: ['Si', 'No']},
            {index: 15, type: 'text'},
            {index: 16, type: 'select', options: [{text: 'Si', value: 'SI'}, {text: 'No', value: 'NO'}]},
            {index: 17, type: 'text'},
            {index: 18, type: 'text'},
            {index: 19, type: 'select', options: [{text: 'Si', value: 'SI'}, {text: 'No', value: 'NO'}]},
            {index: 20, type: 'select', options: ['Si', 'No']},
            {index: 21, type: 'select', options: ['Si', 'No']},
            {index: 22, type: 'select', options: ['HUGGIES', 'SCOT', 'CELEX', 'KOTEX', 'KLEENEX']},
            {index: 23, type: 'select', options: [{text: 'Si', value: 'SI'}, {text: 'No', value: 'NO'}]}
        ]
    });
    
    document.querySelector('#articulos-tab').addEventListener('click', e => {
        setTimeout(() => {
            table_socio_articulos.columns.adjust();
        }, 500);
    });
</script>
@endpush