<div class="row">
    <div class="col-lg-8">
        <iframe id="iframeDireccones" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1950.8214252445189!2d-77.04210566525127!3d-12.068076430934742!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8e921adc161%3A0x91a518942d5e9270!2sEl%20Campo%20de%20Marte!5e0!3m2!1ses!2spe!4v1605456331480!5m2!1ses!2spe"frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <div class="col-lg-4">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Dirección</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        1
                        <button class="btn btn-success p-1" map="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.6422776804234!2d-77.04120176095729!3d-12.06811577496743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8e921adc161%3A0x91a518942d5e9270!2sEl%20Campo%20de%20Marte!5e0!3m2!1ses!2spe!4v1605456963541!5m2!1ses!2spe">
                            <i class="material-icons">gps_fixed</i>
                        </button>
                    </td>
                    <td>Campo de marte</td>
                </tr>
                <tr>
                    <td>
                        2
                        <button class="btn btn-success p-1" map="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1950.8803354389422!2d-77.04193298005234!3d-12.05998111115366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb71ba67f611fab71!2sPlaza%20Bolognesi!5e0!3m2!1ses!2spe!4v1605457049482!5m2!1ses!2spe">
                            <i class="material-icons">gps_not_fixed</i>
                        </button>
                    </td>
                    <td>Plaza Bolognesi</td>
                </tr>
                <tr>
                    <td>
                        3
                        <button class="btn btn-success p-1" map="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7803.773209118893!2d-77.0423406757634!3d-12.051322411836628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8cdda85a341%3A0xa96de306b867b279!2sPlaza%20Dos%20de%20Mayo!5e0!3m2!1ses!2spe!4v1605457099779!5m2!1ses!2spe">
                            <i class="material-icons">gps_not_fixed</i>
                            </button>
                    </td>
                    <td>Plaza 2 de Mayo</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<script>
    const iframeDireccones = document.querySelector('#iframeDireccones');
    const buttons = document.querySelectorAll('#direcciones table button[map]');
    for(let btn of buttons){
        btn.addEventListener('click', direccion);
    }
    
    function direccion(e){
        let btn = e.currentTarget;
        let i = btn.querySelector('i');
        if(i.textContent.trim() == 'gps_not_fixed'){
            for(let btn of buttons){
                btn.querySelector('i').innerText = 'gps_not_fixed';
            }
            let map = btn.getAttribute('map');
            iframeDireccones.src = map;
            i.innerText = 'gps_fixed';
        }
    }
</script>