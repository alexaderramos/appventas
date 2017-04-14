 @extends('layouts.app')
@section('title','Editar Cliente')
@section('content')

<ol class="breadcrumb">
   <li><a href="{{url('home')}}">Home</a></li>
    <li><a href="{{url('cliente')}}">Cliente</a></li>
     <li>Editando Cliente</li>
 </ol>
<div class="row">
  <div class="col-md-8 col-md-offset-1">
  <div class="panel panel-warning">
    <div class="panel-heading">Editar Cliente</div>
  <div class="panel-body">
    <div class="col-md-8 col-md-offset-1">
    {!!Form::model($clientes,['route'=>['cliente.update',$clientes->id],'method'=>'PUT'])!!}
      <div class="form-group">
        {!!form::label('Nombre')!!}
  		{!!form::text('Nombre',null, ['id'=>'Nombre','class'=>'form-control'])!!}
      </div>
      <div class="form-group">
        {!!form::label('Apellidos')!!}
        {!!Form::text('Apellidos',null,['id'=>'Apellidos','class'=>'form-control'])!!}
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
        <a   href="{{url('cliente')}}"type="button" class="btn btn-info">Cancelar</a>
      </div>
    {!!Form::close()!!}
    </div>

  </div>
  </div>
     </div>
</div>
@endsection
