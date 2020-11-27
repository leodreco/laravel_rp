@push('custom-css')
<style>
#documentos .table th, #documentos .table tr{
    text-align: center;
}
</style>
@endpush

<div class="row">
    <div class="col-12">
        <table class="table table-striped table-hover" style="width:100%" id="table_documentos">
            <thead>
            <!--<tr><th colspan="19" class="text-center text-primary">DETALLE COMPRAS DE CLIENTE 123123123123 - DERRAMA MAGISTERIAL </th></tr>-->
                <tr>
                    <th>#</th>
                    <th>TIPO</th>
                    <th>NÚMERO</th>
                    <th>FECHA</th>
                    <th>SERIE</th>
                    <th>NÚMERO SUNAT</th>
                    <th>DOMI</th>
                    <th>ESTADO</th>
                    <th>ESTADO2</th>
                    <th>DSCTO(0.00)</th>
                    <th>TOTAL()</th>
                    <th>SALDO</th>
                    <th>IMPUESTO</th>
                    <th>HR</th>
                    <th>CONDICIÓN</th>
                    <th>VENC.</th>
                    <th>REF MOVIL</th>
                    <th>MESA</th>
                    <th>CANAL</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>VEN</td>
                    <td class="button-cell" data-toggle="modal" data-target="#modal_detalle_documento">
                        56251208
                        <button class="btn btn-primary show"><i class="material-icons">visibility</i></button>
                    </td>
                    <td>2020-09-30</td>
                    <td>F031-01</td>
                    <td>00251300</td>
                    <td>002</td>
                    <td>O</td>
                    <td>O</td>
                    <td>0.00</td>
                    <td>637.97</td>
                    <td>637.97</td>
                    <td>102.81</td>
                    <td class="button-cell" data-toggle="modal" data-target="#modal_detalle_documento_hr">
                        109303
                        <button class="btn btn-primary show"><i class="material-icons">visibility</i></button>
                    </td>
                    <td>Credi</td>
                    <td>2020-10-05</td>
                    <td class="button-cell" data-toggle="modal" data-target="#modal_detalle_ref_movil">
                        7964725
                        <button class="btn btn-primary show">
                            <i class="material-icons">visibility</i>
                        </button>
                    </td>
                    <td>002</td>
                    <td>05AY01</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@push('modal')
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal detalle documento" aria-hidden="true" id="modal_detalle_documento_hr">
    <div class="modal-dialog modal-dialog-centered modal-full">
        <livewire:modal.hoja-reparto/>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal detalle documento" aria-hidden="true" id="modal_detalle_ref_movil">
    <div class="modal-dialog modal-dialog-centered modal-full">
        <livewire:modal.referencia-movil/>
    </div>
</div>
@endpush

@push('custom-js')
<script>
    $('#table_documentos').DataTable({
        responsive: true,
        dom: 't',
        paging: false,
        ordering: false
    });
</script>
@endpush