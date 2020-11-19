@extends('layouts.master')

@section('title', 'Cliente | '.$cliente->nombre)

@section('breadcrumb')
<h3>{{ $cliente->nombre}}</h3>
<ol class="breadcrumb" id="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Operaciones</a></li>
    <li class="breadcrumb-item"><a href="/operaciones/cliente">Cliente</a></li>
    <li class="breadcrumb-item active"><a href="#">{{ $cliente->nombre }}</a></li>
</ol>
@endsection

@section('content')
<div class="row">
    
</div>
@endsection