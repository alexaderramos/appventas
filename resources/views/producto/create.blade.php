 @extends('layouts.app')
@section('title','Nuevo Producto')
@section('content')
<ol class="breadcrumb">
    <li><a href="{{url('home')}}">Home</a></li>
    <li><a href="{{url('producto')}}">Producto</a></li>
    <li class="active">Nuevo Producto</li>
 </ol>
 <!-- incluir etiqueta para mostrar los errores -->
<div class="row" style="padding-bottom: 15%;">
  <div class="col-md-10 col-md-offset-1">
  <div class="panel panel-warning">
    <div class="panel-heading">Nuevo Prroducto</div>
  <div class="panel-body">
  <div class="col-md-12 col-md-offset-0 form-horizontal">
  @include('mensajes.alertas')
    {!! Form::open(['route'=>'producto.store','method'=>'POST','files'=>true,'enctype'=>'multipart/form-data']) !!}
          @include('producto.form.reg')
        {{ Form::close() }}
    </div>
  </div>
  </div>
</div>
</div>
@endsection