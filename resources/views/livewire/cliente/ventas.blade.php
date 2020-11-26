@push('custom-css')
<style>
    #ventas canvas{
        width: 400px;
        height: 400px;
    }
</style>
@endpush

<div class="row">
    <div class="col-8 m-auto">
        <canvas></canvas>
    </div>
</div>

@push('custom-js')
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
<script>
    const ctx = document.querySelector('#ventas canvas');
    var myChart = new Chart(ctx, {
        type: 'line',
        responsive: true,
		data: {
			labels: ["Jun", "Jul", "Ago", "Sept", "Oct", "Nov"],
			datasets: [{
				backgroundColor: 'red',
				borderColor: 'red',
				data: [24.97, 46.91, 32.31, 14.19, 13.45, 64.92, 34.63, 42.66],
				label: 'Compras',
				fill: 'star'
			}]
		},
		options: {
		    
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>
@endpush