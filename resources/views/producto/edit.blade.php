 @extends('layouts.master')
@section('title','Editar Prodcuto')
@section('content')
<ol class="breadcrumb">
   <li><a href="{{url('home')}}">Home</a></li>
    <li><a href="{{url('producto')}}">Categ</a></li>
     <li>Editando producto</li>
 </ol>
<div class="row">
  <div class="col-md-8 col-md-offset-1">
  <div class="panel panel-warning">
    <div class="panel-heading">Editar producto</div>
  <div class="panel-body">
    <div class="col-md-8 col-md-offset-1">
    
    {!!Form::model($productos,['route'=>['producto.update',$productos->id],'method'=>'PUT'])!!}
      <div class="form-group">
        {!!form::label('CodProducto')!!}
  		{!!form::text('CodProducto',null, ['id'=>'CodProducto','class'=>'form-control'])!!}
      </div>
      <div class="form-group">
        {!!form::label('Descripcion')!!}
        {!!Form::text('Descripcion',null,['id'=>'Descripcion','class'=>'form-control'])!!}
      </div> 
       <div class="form-group">
        {!!form::label('PrecioCosto')!!}
        {!!Form::text('PrecioCosto',null,['id'=>'PrecioCosto','class'=>'form-control'])!!}
      </div> 
       <div class="form-group">
        {!!form::label('PrecioVenta')!!}
        {!!Form::text('PrecioVenta',null,['id'=>'PrecioVenta','class'=>'form-control'])!!}
      </div>
      <div class="form-group">
        {!!form::label('Cantidad')!!}
        {!!Form::text('Cantidad',null,['id'=>'Cantidad','class'=>'form-control'])!!}
      </div>     
      <div class="form-group">
        <button type="submit" class="btn btn-warning">Update</button>
        <a   href="{{url('producto')}}"type="button" class="btn btn-info">Cancelar</a>
      </div>
    {!!Form::close()!!}
    </div>
  </div>
  </div>
     </div>
</div>
@endsection
