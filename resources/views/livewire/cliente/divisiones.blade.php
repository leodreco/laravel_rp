@push('custom-css')
<style>
    #divisiones table tr th,
    #divisiones table tr td{
        text-align: center;
    }
    
    #divisiones table thead tr th:nth-child(2),
    #divisiones table tbody tr td:nth-child(2){
        text-align: left;
    }
</style>
@endpush

<div class="row">
    <div class="col-12">
        <table class="table table-hover table-bordered table-striped" style="width:100%" id="table_divisiones">
            <thead>
                <tr>
                    <th>#</th>
                    <th data-priority="1">CLIENTE</th>
                    <th>DIVISION</th>
                    <th>CANAL</th>
                    <th data-priority="2">INICIO</th>
                    <th data-priority="3">ULTIMO</th>
                    <th data-priority="4">ESTADO</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>CHOQUE CANSALLA, ADOLFO</td>
                    <td>Helados</td>
                    <td class="position-relative text-left">
                        MINORISTA
                        <button class="btn btn-warning p-0 edit"><i class="material-icons">edit</i></button>
                    </td>
                    <td></td>
                    <td></td>
                    <td>Y</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>CHOQUE CANSALLA, ADOLFO</td>
                    <td>Tradicional</td>
                    <td class="position-relative text-left">
                        MAYORISTA
                        <button class="btn btn-warning p-0 edit"><i class="material-icons">edit</i></button>
                    </td>
                    <td></td>
                    <td></td>
                    <td>Y</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@push('custom-js')
<script>
$('#table_divisiones').DataTable({
    responsive: true,
    dom: 't',
    paging: false,
    ordering: false
});
</script>
@endpush