@push('custom-css')

@endpush

<div class="row">
    <div class="col-md-12 m-auto">
        
        <div id="chart-title">Compras últimos 12 meses</div>
        <div id="bar-chart"></div>
        
    </div>
</div>

@push('custom-js')
<script>
    
    Morris.Bar({
  element: 'bar-chart',
  data: [
    { y: 'Ross', a: 3, b: 4 },
    { y: 'Gregg', a: 1,  b: 2 },
    { y: 'Nick', a: 5,  b: 3 },
    { y: 'Justin', a: 4,  b: 2 },
    { y: 'Rich', a: 3,  b: 1 },
    { y: 'Amber', a: 4,  b: 4 },
    { y: 'Kyle', a: 2, b: 3 },
    { y: 'Daniel', a: 1,  b: 0 },
    { y: 'Dan', a: 3,  b: 3 },
    { y: 'Ken', a: 4, b: 0 },
    { y: 'Andrew', a: 2,  b: 3 },
    { y: 'Sandra', a: 2,  b: 3 }
  ],
  xkey: 'y',
  ykeys: ['a', 'b'],
  labels: ['Tickets', 'Projects'],
  gridTextSize: 12,
  resize: true,
  barColors: function(row, series, type){
    if(series.key == 'a'){
      if(row.y > 4){
        return "#d22d2d";
      }else{
        return "#0b62a4"
      }
    }else{
      return "#7a92a3"
    }
  },
  hideHover: true
});
    
</script>
@endpush