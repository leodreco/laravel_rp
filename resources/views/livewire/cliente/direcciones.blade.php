@push('custom-css')
<style>
    #direcciones .table .t-direccion-acciones{
        max-width: 50px;
        text-align: center;
    }
</style>
@endpush
<div class="row">
    <div class="col-12">
        <div class="table-responsive">
            <table class="table table-hover table-bordered table-striped" style="width:100%" rules="none" id="table-direccion">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Direcciones</th>
                        <th>Departamento</th>
                        <th>Provincia</th>
                        <th>Distrito</th>
                        <th>Tipo</th>
                        <th class="t-direccion-acciones">Acciones</th>
                    </tr>
                </thead>
          <tbody>
            <tr>
              <td>001</td>
              <td>Av. Melodic 539</td>
              <td>ICA</td>
              <td>ICA</td>
              <td>ICA</td>
              <td>ENTREGA</td>
              <td class="t-direccion-acciones">
                    <button class="btn btn-success bt-map p-1" map="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7803.773209118893!2d-77.0423406757634!3d-12.051322411836628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8cdda85a341%3A0xa96de306b867b279!2sPlaza%20Dos%20de%20Mayo!5e0!3m2!1ses!2spe!4v1605457099779!5m2!1ses!2spe">
                        <i class="material-icons">gps_not_fixed</i>
                    </button>
              </td>
            </tr>
            <tr>
              <td>002</td>
              <td>Av. Garnet 1729</td>
              <td>ICA</td>
              <td>NAZCA</td>
              <td>NAZCA</td>
              <td>ENTREGA</td>
              <td class="t-direccion-acciones">
                    <button class="btn btn-success bt-map p-1" map="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7803.773209118893!2d-77.0423406757634!3d-12.051322411836628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8cdda85a341%3A0xa96de306b867b279!2sPlaza%20Dos%20de%20Mayo!5e0!3m2!1ses!2spe!4v1605457099779!5m2!1ses!2spe">
                        <i class="material-icons">gps_not_fixed</i>
                    </button>
              </td>
            </tr>
            <tr>
              <td>003</td>
              <td>Av. Considerable Tortoise 209 Av. Considerable Tortoise 209</td>
              <td>AYACUCHO</td>
              <td>LUCANAS</td>
              <td>SAN PEDRO DE PALCO</td>
              <td>ENTREGA</td>
              <td class="t-direccion-acciones">
                    <button class="btn btn-success bt-map p-1" map="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7803.773209118893!2d-77.0423406757634!3d-12.051322411836628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8cdda85a341%3A0xa96de306b867b279!2sPlaza%20Dos%20de%20Mayo!5e0!3m2!1ses!2spe!4v1605457099779!5m2!1ses!2spe">
                        <i class="material-icons">gps_not_fixed</i>
                    </button>
              </td>
            </tr>
            <tr>
              <td>004</td>
              <td>Av. Yetta Desdemona 1905</td>
              <td>ICA</td>
              <td>ICA</td>
              <td>ICA</td>
              <td>ENTREGA</td>
              <td class="t-direccion-acciones">
                  <button class="btn btn-success bt-map p-1" map="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7803.773209118893!2d-77.0423406757634!3d-12.051322411836628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8cdda85a341%3A0xa96de306b867b279!2sPlaza%20Dos%20de%20Mayo!5e0!3m2!1ses!2spe!4v1605457099779!5m2!1ses!2spe">
                        <i class="material-icons">gps_not_fixed</i>
                    </button>
              </td>
            </tr>
            <tr>
              <td>005</td>
              <td>Av. Melodic 539</td>
              <td>ICA</td>
              <td>NAZCA</td>
              <td>NAZCA</td>
              <td>ENTREGA</td>
              <td class="t-direccion-acciones">
                  <button class="btn btn-success bt-map p-1" map="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7803.773209118893!2d-77.0423406757634!3d-12.051322411836628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8cdda85a341%3A0xa96de306b867b279!2sPlaza%20Dos%20de%20Mayo!5e0!3m2!1ses!2spe!4v1605457099779!5m2!1ses!2spe">
                        <i class="material-icons">gps_not_fixed</i>
                    </button>
              </td>
            </tr>
          </tbody>
        </table>
        </div>
    </div>
</div>

@push('custom-js')
<script>
    const iframeDireccones = document.querySelector('#iframeDireccones');
    const buttons = document.querySelectorAll('#direcciones table button[map]');
    for(let btn of buttons){
        btn.addEventListener('click', direccion);
    }
    
    function direccion(e){
        
        $('#modal_mapa').modal();
        $('#modal_mapa iframe')[0].src = e.currentTarget.getAttribute('map')
        let direccion = e.currentTarget.closest('tr').querySelectorAll('td')[1].textContent;
        document.querySelector('#modal_mapa .modal-title span').textContent = direccion;
    }
    
    const table_direccion = $('#table-direccion').DataTable({
        responsive: true,
        dom: 't',
        paging: false,
        ordering: false
    });
</script>
@endpush