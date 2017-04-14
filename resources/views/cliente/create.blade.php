 @extends('layouts.app')
@section('title','Nuevo Cliente')
@section('content')
<ol class="breadcrumb">
    <li><a href="{{url('home')}}">Home</a></li>
    <li><a href="{{url('cliente')}}">Clientes</a></li>
    <li class="active">Nuevo Cliente</li>
 </ol>
 <!-- incluir etiqueta para mostrar los errores -->
  <div class="col-md-12">
   @include('mensajes.mensajes')
  </div>
<div class="row">
  <div class="col-md-6 col-md-offset-3">
  <div class="panel panel-warning">
    <div class="panel-heading">Nuevo Cliente</div>
  <div class="panel-body">
  <div class="col-md-12 col-md-offset">  
    {!!Form::open(['route'=>'cliente.store','method'=>'POST'])!!}
     <div class="form-group">
        {!!form::label('Nombre')!!}
  			{!!form::text('Nombre',null, ['id'=>'Nick','class'=>'form-control', 'placeholder'=>'Ingrese nombre'])!!}
      </div> 
      <div class="form-group">
        {!!form::label('Apellidos')!!}
  			{!!form::text('Apellidos',null, ['id'=>'Apellidos','class'=>'form-control', 'placeholder'=>'Ingrese apellidos'])!!}
      </div>
      <div class="form-group">
        {!!form::label('Telefono')!!}
        {!!Form::text('Telefono',null,['id'=>'Telefono','class'=>'form-control', 'placeholder'=>'Ingrese telefono'])!!}
      </div>
      <div class="form-group">
        {!!form::label('Direccion')!!}
        {!!Form::text('Direccion',null,['id'=>'Direccion','class'=>'form-control', 'placeholder'=>'Ingrese direccion'])!!}
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-warning">Guardar</button>
        <a   href="{{url('cliente')}}"type="button" class="btn btn-info">Cancelar</a>
      </div>
    {!!Form::close()!!}
    </div>

  </div>
  </div>
</div>
</div>
@endsection