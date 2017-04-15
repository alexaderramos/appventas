 @extends('layouts.master')
@section('title','Nuevo Proveedor')
@section('content')
<ol class="breadcrumb">
    <li><a href="{{url('home')}}">Home</a></li>
    <li><a href="{{url('proveedor')}}">Proveedor</a></li>
    <li class="active">Nuevo Proveedor</li>
 </ol>
 <!-- incluir etiqueta para mostrar los errores -->
@include('mensajes.mensajes')
<div class="row">
  <div class="col-md-6 col-md-offset-3">
  <div class="panel panel-warning">
    <div class="panel-heading">Nuevo Proveedor</div>
  <div class="panel-body">
  <div class="col-md-12 col-md-offset"> 
    {!!Form::open(['route'=>'proveedor.store','method'=>'POST'])!!}
      @include('proveedor.form.reg')
    {!!Form::close()!!}
    </div>
  </div>
  </div>
</div>
</div>
@endsection