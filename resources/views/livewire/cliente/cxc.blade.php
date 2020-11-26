<div class="row">
    <div class="col-12">
        <!--<div class="table-responsive">-->
            <table class="table table-hover table-bordered table-sriped" style="width: 100%" id="table_cuentas_por_cobrar">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Doc</th>
                        <th>Número</th>
                        <th>Serie</th>
                        <th>Número Sunat</th>
                        <th>Fecha</th>
                        <th>Vencimiento</th>
                        <th>Total (302.97)</th>
                        <th>Saldo (302.97)</th>
                        <th>Pago diferido</th>
                        <th>No vencido (0.00)</th>
                        <th>0 - 30 (0.00)</th>
                        <th>31 - 60 (0.00)</th>
                        <th>61 - 90 (0.00)</th>
                        <th>91 - 120 (0.00)</th>
                        <th>121 - + (302-97)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>FA</td>
                        <td class="button-cell">
                            59118051
                            <button class="btn btn-primary show"><i class="material-icons">visibility</i></button>
                        </td>
                        <td>F041-01</td>
                        <td>00117945</td>
                        <td>2020-03-13</td>
                        <td>2020-03-27</td>
                        <td>302.97</td>
                        <td>302.97</td>
                        <td>-1</td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>302.97</td>
                    </tr>
                </tbody>
            </table>
        <!--</div>-->
    </div>
</div>

@push('custom-js')
<script>
    $('#table_cuentas_por_cobrar').DataTable({
        responsive: true,
        dom: 't',
        paging: false,
        ordering: false
    });
</script>
@endpush