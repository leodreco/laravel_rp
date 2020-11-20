@extends('layouts.master')

@section('title', 'Cliente | '.$cliente->nombre)

@section('css')
<style>
    #direcciones #iframeDireccones{
        width: 100%;
        min-height: 600px;
    }
    #modal_mapa iframe{
        width: 100%;
        height: 700px;
    }   
</style>
@endsection

@section('breadcrumb')
<h3>{{ $cliente->nombre}}</h3>
<ol class="breadcrumb" id="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Operaciones</a></li>
    <li class="breadcrumb-item"><a href="/operaciones/cliente">Cliente</a></li>
    <li class="breadcrumb-item active"><a href="#">{{ $cliente->nombre }}</a></li>
</ol>
@endsection

@section('content')
<div class="row px-3">
    <ul class="col-12 nav nav-tabs nav-fill" role="tab-list" id="tabs">
        <li class="nav-item active">
            <a class="nav-link active" id="resumen-tab" data-toggle="tab" href="#resumen" role="tab" aria-selected="true">Resumen</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="direcciones-tab" data-toggle="tab" href="#direcciones" role="tab" aria-selected="false">Direcciones</a>
        </li>
         <li class="nav-item">
            <a class="nav-link" id="divisiones-tab" data-toggle="tab" href="#divisiones" role="tab" aria-selected="false">Divisiones</a>
        </li>
         <li class="nav-item">
            <a class="nav-link" id="mesa-tab" data-toggle="tab" href="#mesa" role="tab" aria-selected="false">Mesa</a>
        </li>
         <li class="nav-item">
            <a class="nav-link" id="documentos-tab" data-toggle="tab" href="#documentos" role="tab" aria-selected="false">Documentos</a>
        </li>
         <li class="nav-item">
            <a class="nav-link" id="pedidos-tab" data-toggle="tab" href="#pedidos" role="tab" aria-selected="false">Pedidos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pedidos-sap-tab" data-toggle="tab" href="#pedidos-sap" role="tab" aria-selected="false">Pedidos SAP</a>
        </li>
         <li class="nav-item">
            <a class="nav-link" id="cxc-tab" data-toggle="tab" href="#cxc" role="tab" aria-selected="false">CxC</a>
        </li>
         <li class="nav-item">
            <a class="nav-link" id="ventas-tab" data-toggle="tab" href="#ventas" role="tab" aria-selected="false">Ventas</a>
        </li>
         <li class="nav-item">
            <a class="nav-link" id="nc-tab" data-toggle="tab" href="#nc" role="tab" aria-selected="false">Nc</a>
        </li>
    </ul>
    <div class="col-12 tab-content border-right border-left border-bottom pt-4">
        <div class="tab-pane fade show active" id="resumen" role="tabpanel" aria-labelledby="tab resumen">
            <livewire:cliente.resumen :cliente="$cliente"/>
        </div>
        
        <div class="tab-pane fade" id="direcciones" role="tabpanel" aria-labelledby="tab direcciones">
            <livewire:cliente.direcciones :cliente="$cliente"/>
        </div>
        
        <div class="tab-pane fade" id="divisiones" role="tabpanel" aria-labelledby="tab divisiones">
            <livewire:cliente.divisiones/>
        </div>
        
        <div class="tab-pane fade" id="mesa" role="tabpanel" aria-labelledby="tab mesa">
            <livewire:cliente.mesa/>
        </div>
        
        <div class="tab-pane fade" id="documentos" role="tabpanel" aria-labelledby="tab documentos">
            <livewire:cliente.documentos/>
        </div>
        
        <div class="tab-pane fade" id="pedidos" role="tabpanel" aria-labelledby="tab pedidos">
            <livewire:cliente.pedidos/>
        </div>
        
        <div class="tab-pane fade" id="pedidos-sap" role="tabpanel" aria-labelledby="tab pedidos-sap">
            <livewire:cliente.pedidos-sap/>
        </div>
        <div class="tab-pane fade" id="cxc" role="tabpanel" aria-labelledby="tab cxc">
            <livewire:cliente.cxc/>
        </div>
        
        <div class="tab-pane fade" id="ventas" role="tabpanel" aria-labelledby="tab ventas">
            <livewire:cliente.ventas/>
        </div>
        <div class="tab-pane fade" id="nc" role="tabpanel" aria-labelledby="tab nc">
            <livewire:cliente.nc/>
        </div>
    </div>
</div>
@endsection

@section('templates')
<template id="breadcrumb-item">
    <li class="breadcrumb-item active tab"><a href=""></a></li>
</template>
@endsection

@section('js')
<script>
    const tabs = document.querySelector('#tabs');
    const breadcrumb = document.querySelector('#breadcrumb');
    for(let a of document.querySelectorAll('#tabs li > a')){
        a.addEventListener('click', changeTab);
    }
    
    function changeTab(e){
        if(!!breadcrumb.querySelector('.tab')){
            breadcrumb.removeChild(breadcrumb.querySelector('.tab'));
        }
        
        let item = document.querySelector('#breadcrumb-item').content;
        
        item.querySelector('a').href = e.currentTarget.getAttribute('href');
        item.querySelector('a').textContent = e.currentTarget.textContent;
        
        breadcrumb.appendChild(document.importNode(item, true));
        
        window.location.hash = e.currentTarget.getAttribute('href');
    }
    
    if(window.location.hash != ''){
        tabs.querySelector(window.location.hash+ '-tab').click();
    }
</script>
<script>
    window.addEventListener('hashchange', e => {
        let hash = e.newURL.substring(e.newURL.lastIndexOf('#') + 1, e.newURL.length);
        
        let tab = document.querySelector('#' + hash + '-tab');
        if(!!tab){
            tab.click();
        }
    });
</script>
@endsection