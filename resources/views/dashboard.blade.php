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
</style>
@endsection

@section('breadcrumb')
<h3>Dashboard</h3>
<div class="breadcrumb">
    <a class="breadcrumb__step breadcrumb__step--active" href="#">Dashboard</a>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-12 col-sm-6 col-lg-4 col-xl-3 dashboard-card">
        <a href="/operaciones/cliente">
            <div class="card bg-primary text-white">
                <div class="card-body">
                    <div class="mb-2">
                        <i class="material-icons">store_mall_directory</i>
                        Clientes Totales: 50000
                    </div>
                    <div class="pt-2">
                        Ir
                        <div class="float-right">
                            <i class="material-icons">arrow_forward</i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-12 col-sm-6 col-lg-4 col-xl-3 dashboard-card">
        <a href="#">
            <div class="card bg-info text-white">
                <div class="card-body">
                    <div class="mb-2">
                        <i class="material-icons">local_shipping</i>
                        Pedidos pendientes: 45
                    </div>
                    <div class="pt-2">
                        Ir
                        <div class="float-right">
                            <i class="material-icons">arrow_forward</i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-12 col-sm-6 col-lg-4 col-xl-3 dashboard-card">
        <a href="#">
            <div class="card bg-success text-white">
                <div class="card-body">
                    <div class="mb-2">
                        <i class="material-icons">add_road</i>
                        Entregas en proceso: 4
                    </div>
                    <div class="pt-2">
                        Ir
                        <div class="float-right">
                            <i class="material-icons">arrow_forward</i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>

<div class="row mt-3">
   <div class="col-12 col-lg-6 col-xl-3 cd-st">
      <a href="/operaciones/cliente">
         <div class="card gradient-deepblue">
           <div class="card-body">
              <h5 class="mb-0">9526 <span class="float-right"><i class="material-icons">shopping_cart</i></span></h5>
                <div class="progress my-3" style="height:3px;">
                   <div class="progress-bar" style="width:55%"></div>
                </div>
              <h6 class="mb-0 ">Total Pedidos <span class="float-right">+4.2% </span></h6>
            </div>
         </div>
      </a>
   </div>
   <div class="col-12 col-lg-6 col-xl-3 cd-st">
       <a href="/operaciones/cliente">
         <div class="card gradient-orange">
           <div class="card-body">
              <h5 class="mb-0">8323 <span class="float-right"><i class="material-icons">store</i></span></h5>
                <div class="progress my-3" style="height:3px;">
                   <div class="progress-bar" style="width:55%"></div>
                </div>
              <h6 class="mb-0">Total Ventas <span class="float-right">+1.2% </span></h6>
            </div>
         </div>
      </a>
   </div>
   <div class="col-12 col-lg-6 col-xl-3 cd-st">
       <a href="/operaciones/cliente">
         <div class="card gradient-ohhappiness">
            <div class="card-body">
              <h5 class="mb-0">6200 <span class="float-right"><i class="material-icons">visibility</i></span></h5>
                <div class="progress my-3" style="height:3px;">
                   <div class="progress-bar" style="width:55%"></div>
                </div>
              <h6 class="mb-0">Visitas <span class="float-right">+5.2% </span></h6>
            </div>
         </div>
       </a>
   </div>
   <div class="col-12 col-lg-6 col-xl-3 cd-st">
       <a href="/operaciones/cliente">
         <div class="card gradient-ibiza">
            <div class="card-body">
              <h5 class="mb-0">5630 <span class="float-right"><i class="material-icons">local_shipping</i></span></h5>
                <div class="progress my-3" style="height:3px;">
                   <div class="progress-bar" style="width:55%"></div>
                </div>
              <h6 class="mb-0">Pedidos Pendientes <span class="float-right">+2.2% </span></h6>
            </div>
         </div>
       </a>
   </div>
 </div>


@endsection

@section('js')

@endsection
