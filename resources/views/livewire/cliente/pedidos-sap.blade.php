<div class="row">
    <div class="col-12">
        <!--<div class="table-responsive">-->
            <table class="table table-hover table-bordered table-striped" style="width:100%" id="table_pedidos_sap">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Número</th>
                        <th>Nombre</th>
                        <th>Domi</th>
                        <th>Fecha</th>
                        <th>Vendedor</th>
                        <th>Término</th>
                        <th>Sede</th>
                        <th>Mesa</th>
                        <th>Total</th>
                        <th>Dscto.</th>
                        <th>Estado</th>
                        <th>Móvil</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>1</th>
                        <td>
                            3324234
                            <button class="btn btn-primary show"><i class="material-icons">visibility</i></button>
                        </td>
                        <td>DERRAMA MAGISTERIAL</td>
                        <td>423</td>
                        <td>2020-09-10</td>
                        <td>Ayala</td>
                        <td>Crédi</td>
                        <td>AY</td>
                        <td>002</td>
                        <td>79.38</td>
                        <td>0.00</td>
                        <td>Cerrado</td>
                        <td>
                            7964725
                            <button class="btn btn-primary show"><i class="material-icons">visibility</i></button>
                        </td>
                    </tr>
                    <tr>
                        <th>2</th>
                        <td>
                            3544234
                            <button class="btn btn-primary show"><i class="material-icons">visibility</i></button>
                        </td>
                        <td>DERRAMA MAGISTERIAL</td>
                        <td>563</td>
                        <td>2020-08-06</td>
                        <td>Peral</td>
                        <td>Crédi</td>
                        <td>NZ</td>
                        <td>013</td>
                        <td>690.54</td>
                        <td>0.00</td>
                        <td>Cerrado</td>
                        <td>7465618<button class="btn btn-primary show"><i class="material-icons">visibility</i></button></td>
                    </tr>
                    <tr>
                        <th>3</th>
                        <td>9824234<button class="btn btn-primary show"><i class="material-icons">visibility</i></button></td>
                        <td>DERRAMA MAGISTERIAL</td>
                        <td>543</td>
                        <td>2020-05-12</td>
                        <td>Peral</td>
                        <td>Conta</td>
                        <td>NZ</td>
                        <td>013</td>
                        <td>138.11</td>
                        <td>0.00</td>
                        <td>Cerrado</td>
                        <td>7465621<button class="btn btn-primary show"><i class="material-icons">visibility</i></button></td>
                    </tr>
                    <tr>
                        <th>4</th>
                        <td>3324234<button class="btn btn-primary show"><i class="material-icons">visibility</i></button></td>
                        <td>DERRAMA MAGISTERIAL</td>
                        <td>423</td>
                        <td>2020-09-10</td>
                        <td>Velas</td>
                        <td>Conta</td>
                        <td>NZ</td>
                        <td>002</td>
                        <td>302.97</td>
                        <td>0.00</td>
                        <td>Cerrado</td>
                        <td>7462131<button class="btn btn-primary show"><i class="material-icons">visibility</i></button></td>
                    </tr>
                    <tr>
                        <th>5</th>
                        <td>9824234<button class="btn btn-primary show"><i class="material-icons">visibility</i></button></td>
                        <td>DERRAMA MAGISTERIAL</td>
                        <td>673</td>
                        <td>2020-05-12</td>
                        <td>Salas</td>
                        <td>Crédi</td>
                        <td>IC</td>
                        <td>009</td>
                        <td>148.36</td>
                        <td>0.00</td>
                        <td>Cerrado</td>
                        <td>7451090<button class="btn btn-primary show"><i class="material-icons">visibility</i></button></td>
                    </tr>
                </tbody>
            </table>
        <!--</div>-->
    </div>
</div>

@push('custom-js')
<script>
    initDataTable('#table_pedidos_sap', {
        dataTable: {
            dom: `<"row"
                <"col-12 col-md-4"l>
                <"col-12 col-md-8"p>
            >rt`,
            columnDefs: [
                {className: 'button-cell', targets: [1,12]},
            ]
        },
        buttonsResponsive: [
            {index: 1, type: 'href', value: '.btn.show'},
            {index: 12, type: 'href', value: '.btn.show'}
        ],
        filtros: [
            
        ]
    });
</script>
@endpush