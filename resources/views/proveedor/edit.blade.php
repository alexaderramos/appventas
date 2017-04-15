 @extends('layouts.master')
@section('title','Editar Proveedor')
@section('content')

<ol class="breadcrumb">
   <li><a href="{{url('home')}}">Home</a></li>
    <li><a href="{{url('cliente')}}">Proveedor</a></li>
     <li>Editando Proveedor</li>
 </ol>
<div class="row">
  <div class="col-md-8 col-md-offset-1">
  <div class="panel panel-warning">
    <div class="panel-heading">Editar Proveedor</div>
  <div class="panel-body">
    <div class="col-md-8 col-md-offset-1">
    {!!Form::model($proveedors,['route'=>['proveedor.update',$proveedors->id],'method'=>'PUT'])!!}
      <div class="form-group">
        {!!form::label('Ruc')!!}
  		{!!form::text('Ruc',null, ['id'=>'Ruc','class'=>'form-control'])!!}
      </div>
      <div class="form-group">
        {!!form::label('Proveedor')!!}
        {!!Form::text('Proveedor',null,['id'=>'Proveedor','class'=>'form-control'])!!}
      </div>
      <div class="form-group">
        {!!form::label('Telefono')!!}
         {!!Form::text('Telefono',null,['id'=>'Telefono','class'=>'form-control'])!!}
     </div>
      <div class="form-group">
        {!!form::label('Direccion')!!}
         {!!Form::text('Direccion',null,['id'=>'Direccion','class'=>'form-control'])!!}
     </div>
      <div class="form-group">
        <button type="submit" class="btn btn-warning">Update</button>
        <a   href="{{url('proveedor')}}"type="button" class="btn btn-info">Cancelar</a>
      </div>
    {!!Form::close()!!}
    </div>
  </div>
  </div>
     </div>
</div>
@endsection
