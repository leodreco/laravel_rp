@extends('layouts.master')

@section('title', 'Dashboard')

@section('css')
<style>
    .dashboard-card{
        margin-bottom: 15px;
    }
    .dashboard-card a{
        color: white;
        text-decoration: none;
    }
    
    .gradient-deepblue{
        background: linear-gradient(45deg, #6d09d7, #2474ff)!important;
    }
    .gradient-orange{
        background: linear-gradient(45deg, #fc4a1a, #f7b733)!important;
    }
    .gradient-ohhappiness{
        background: linear-gradient(45deg, #00b09b, #96c93d)!important;
    }
    .gradient-ibiza{
        background: linear-gradient(45deg, #ee0979, #ff6a00)!important;
    }
    
    .cd-st a{
        height:8rem;
        color: white;
        border:none;
        text-decoration:none;
    }
    
    .cd-st-g{
        box-shadow: 0 0 10px 0 rgba(183,192,206,.2);
        border: 1px solid rgba(238,238,238,.75);
    }
    
    .progress{
        background-color: rgba(0, 0, 0, 0.05);
        border-radius: .25rem;
        box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1);
    }
    .progress-bar{
        text-align: center;
        white-space: nowrap;
        background-color: #fff;
        transition: width .6s ease;
    }
    .fz{
        font-size:36px;
    }
</style>
@endsection

@section('breadcrumb')
<!--<h3>Dashboard</h3>-->
<!--<div class="breadcrumb">-->
<!--    <a class="breadcrumb__step breadcrumb__step--active" href="#">Dashboard</a>-->
<!--</div>-->
@endsection

@section('content')
<div class="row mt-3">
   <div class="col-md-12 col-lg-6 col-xl-3 cd-st mb-3">
      <a href="/operaciones/cliente">
         <div class="card gradient-deepblue">
           <div class="card-body">
              <h5 class="mb-0">9526 <span class="float-right"><i class="material-icons fz">shopping_cart</i></span></h5>
                <div class="progress my-3" style="height:3px;">
                   <div class="progress-bar" style="width:55%"></div>
                </div>
              <h6 class="mb-0 ">Total compras acumuladas <span class="float-right">+4.2% </span></h6>
            </div>
         </div>
      </a>
   </div>
   <div class="col-md-12 col-lg-6 col-xl-3 cd-st mb-3">
       <a href="/operaciones/cliente">
         <div class="card gradient-orange">
           <div class="card-body">
              <h5 class="mb-0">8323 <span class="float-right"><span class="material-icons fz">assignment_ind</span></span></h5>
                <div class="progress my-3" style="height:3px;">
                   <div class="progress-bar" style="width:55%"></div>
                </div>
              <h6 class="mb-0">Clientes nuevos del mes <span class="float-right">+1.2% </span></h6>
            </div>
         </div>
      </a>
   </div>
   <div class="col-md-12 col-lg-6 col-xl-3 cd-st mb-3">
       <a href="/operaciones/cliente">
         <div class="card gradient-ohhappiness">
            <div class="card-body">
              <h5 class="mb-0">6200 <span class="float-right"><i class="material-icons fz">group</i></span></h5>
                <div class="progress my-3" style="height:3px;">
                   <div class="progress-bar" style="width:55%"></div>
                </div>
              <h6 class="mb-0">Total clientes <span class="float-right">+5.2% </span></h6>
            </div>
         </div>
       </a>
   </div>
   <div class="col-md-12 col-lg-6 col-xl-3 cd-st mb-3">
       <a href="/operaciones/cliente">
         <div class="card gradient-ibiza">
            <div class="card-body">
              <h5 class="mb-0">5630 <span class="float-right"><i class="material-icons fz">local_shipping</i></span></h5>
                <div class="progress my-3" style="height:3px;">
                   <div class="progress-bar" style="width:55%"></div>
                </div>
              <h6 class="mb-0">Pedidos Pendientes <span class="float-right">+2.2% </span></h6>
            </div>
         </div>
       </a>
   </div>
</div>

<div class="row mt-3">
    
    <div class="col-md-4 col-lg-4 col-xl-4 mb-3 text-center">
        <div class="card cd-st-g">
            <div class="card-body">
                <label class="label label-success">Top 5 de % de categorías más compradas</label>
                <div id="pie-chart" ></div>
            </div>
        </div>
    </div>
    
    <div class="col-md-4 col-lg-4 col-xl-4 mb-3 text-center">
        <div class="card cd-st-g">
            <div class="card-body">
                <label class="label label-success">Clientes Vs Tipos de Negocio</label>
                <div id="line-chart"></div>
            </div>
        </div>
    </div>
    
    <div class="col-md-4 col-lg-4 col-xl-4 mb-3 text-center">
        <div class="card cd-st-g ">
            <div class="card-body">
                <label class="label label-success">Bar Chart</label>
                <div id="bar-chart" ></div>
            </div>
        </div>
    </div>
    
    <div class="col-md-5">
        <div class="row">
            
            <div class="col-md-6 col-lg-6 col-xl-6 mb-3 text-center">
                <div class="card  cd-st-g">
                    <div class="card-body">
                        <label class="label label-success">Bar stacked</label>
                        <div id="stacked" ></div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-6 col-xl-6 mb-3 text-center">
                <div class="card cd-st-g">
                    <div class="card-body">
                        <label class="label label-success">Area Chart</label>
                        <div id="area-chart" ></div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
    <div class="col-md-7">
        <div class="row">
            
            <div class="col-md-12 col-lg-12 col-xl-12 mb-3 text-center">
                <div class="card  cd-st-g">
                    <div class="card-body">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61920.60976270542!2d-75.76178851644744!3d-14.074926928399371!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9110e2c3cec74f3d%3A0x5ce1a2b590e67ecd!2sIca!5e0!3m2!1ses-419!2spe!4v1606754712246!5m2!1ses-419!2spe" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
    
    
</div>
 


@endsection

@section('js')
    <script type="text/javascript">
        var data = [
      { y: '2014', a: 50, b: 90},
      { y: '2015', a: 65,  b: 75},
      { y: '2016', a: 50,  b: 50},
      { y: '2017', a: 150,  b: 60},
      { y: '2018', a: 80,  b: 100},
      { y: '2019', a: 90,  b: 70},
      { y: '2020', a: 100, b: 75},
      { y: '2021', a: 115, b: 160},
      { y: '2022', a: 120, b: 85},
      { y: '2023', a: 145, b: 85},
      { y: '2024', a: 160, b: 95}
    ],
    config = {
        data: data,
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Ingresos', 'Salidas'],
        fillOpacity: 0.6,
        hideHover: 'auto',
        behaveLikeLine: true,
        resize: true,
        pointFillColors:['#ffffff'],
        pointStrokeColors: ['black'],
        lineColors:['#19afaf','#F11B62']
    };
    config.element = 'area-chart';
    Morris.Area(config);
    config.element = 'line-chart';
    Morris.Line(config);
    config.element = 'bar-chart';
    Morris.Bar(config);
    config.element = 'stacked';
    config.stacked = true;
    Morris.Bar(config);
    Morris.Donut({
      element: 'pie-chart',
      data: [
        {label: "Lácteos", value: 30},
        {label: "Carne", value: 15},
        {label: "Verdura", value: 45},
        {label: "Frutas", value: 10},
        {label: "Bebidas", value: 20}
      ],
      resize:true,
      backgroundColor: 'white',
      labelColor: 'black',
      colors: [
        '#19afaf',
        '#F11B62',
        '#2D92FE',
        '#FC551D',
        '#A527D1'
        ],
    });
    
    
    </script>
@endsection
