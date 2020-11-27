@extends('layouts.master')

@section('title', 'Socio de Negocio | '.'Valenza Araos, Gloria Lastenia')

@section('breadcrumb')
<h3>{{ 'Valenza Araos, Gloria Lastenia' }}</h3>
<div class="breadcrumb" id="breadcrumb">
    <a class="breadcrumb__step" href="#">Datos maestros</a>
    <a class="breadcrumb__step" href="/datos-maestros/socio">Socio de negocio</a>
    <a class="breadcrumb__step breadcrumb__step--active" href="#">{{ 'Valenza Araos, Gloria Lastenia' }}</a>
</div>
@endsection

@section('content')
<div class="row">
    <ul class="col-12 nav nav-tabs nav-fill" role="tab-list" id="tabs">
        <li class="nav-item active">
            <a class="nav-link active" id="resumen-tab" data-toggle="tab" href="#resumen" role="tab" aria-selected="true">Resumen</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="documentos-tab" data-toggle="tab" href="#documentos" role="tab" aria-selected="false">Documentos</a>
        </li>
         <li class="nav-item">
            <a class="nav-link" id="articulos-tab" data-toggle="tab" href="#articulos" role="tab" aria-selected="false">Artículos</a>
        </li>
         <li class="nav-item">
            <a class="nav-link" id="facturas-tab" data-toggle="tab" href="#facturas" role="tab" aria-selected="false">Facturas Electrónicas</a>
        </li>
    </ul>
    
    <div class="col-12 tab-content border-right border-left border-bottom pt-4">
        <div class="tab-pane fade show active" id="resumen" role="tabpanel" aria-labelledby="tab resumen"></div>
        
        <div class="tab-pane fade" id="documentos" role="tabpanel" aria-labelledby="tab documentos">
            <livewire:socio.documentos/>
        </div>
        
        <div class="tab-pane fade" id="articulos" role="tabpanel" aria-labelledby="tab artículos"></div>
        
        <div class="tab-pane fade" id="facturas" role="tabpanel" aria-labelledby="tab facturas electrónicas"></div>
        
    </div>
</div>
@endsection

@section('js')

@endsection