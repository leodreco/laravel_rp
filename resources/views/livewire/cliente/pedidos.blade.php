<div class="row">
    <div class="col-12">
        <div class="table-responsive">
            <table class="table table-hover table-bordered table-striped" style="width:100%" id="table_pedidos">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>TIPO</th>
                        <th>NÚMERO</th>
                        <th>CÓDIGO</th>
                        <th>DOMI</th>
                        <th>FECHA</th>
                        <th>VENDEDOR</th>
                        <th>TÉRMINO</th>
                        <th>SEDE</th>
                        <th>MESA</th>
                        <th>TOTAL</th>
                        <th>DSCTO.</th>
                        <th>EXPRESS</th>
                        <th>ESTADO</th>
                        <th>OBSERVACIÓN</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>1</th>
                        <td>Pedido</td>
                        <td>3324234</td>
                        <td>CL0023</td>
                        <td>423</td>
                        <td>2020-09-10</td>
                        <td>432</td>
                        <td>Crédi</td>
                        <td>IC</td>
                        <td>MACED</td>
                        <td>324.00</td>
                        <td>.00</td>
                        <td>-</td>
                        <td>N->G</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>2</th>
                        <td>No Pedido</td>
                        <td>3544234</td>
                        <td>CL0454</td>
                        <td>563</td>
                        <td>2020-08-06</td>
                        <td>876</td>
                        <td>Crédi</td>
                        <td>IC</td>
                        <td>FULMI</td>
                        <td>988.00</td>
                        <td>.00</td>
                        <td>-</td>
                        <td>N->G</td>
                        <td>TIENE STOCK</td>
                    </tr>
                    <tr>
                        <th>3</th>
                        <td>Pedido</td>
                        <td>9824234</td>
                        <td>CL0099</td>
                        <td>543</td>
                        <td>2020-05-12</td>
                        <td>432</td>
                        <td>Crédi</td>
                        <td>IC</td>
                        <td>MACED</td>
                        <td>564.00</td>
                        <td>.00</td>
                        <td>-</td>
                        <td>N->G</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>4</th>
                        <td>Pedido</td>
                        <td>3324234</td>
                        <td>CL0023</td>
                        <td>423</td>
                        <td>2020-09-10</td>
                        <td>542</td>
                        <td>Crédi</td>
                        <td>IC</td>
                        <td>MACED</td>
                        <td>324.00</td>
                        <td>.00</td>
                        <td>-</td>
                        <td>N->G</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>5</th>
                        <td>No Pedido</td>
                        <td>9824234</td>
                        <td>CL0099</td>
                        <td>673</td>
                        <td>2020-05-12</td>
                        <td>432</td>
                        <td>Crédi</td>
                        <td>IC</td>
                        <td>MACED</td>
                        <td>564.00</td>
                        <td>.00</td>
                        <td>-</td>
                        <td>N->G</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@push('custom-js')
<script>
$('#table_pedidos').DataTable({
    responsive: true,
    dom: 't',
    paging: false,
    ordering: false
});
</script>
@endpush