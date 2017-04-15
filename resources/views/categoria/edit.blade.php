 @extends('layouts.master')
@section('title','Editar Categoria')
@section('content')
<ol class="breadcrumb">
   <li><a href="{{url('home')}}">Home</a></li>
    <li><a href="{{url('categoria')}}">Categoria</a></li>
     <li>Editando categoria</li>
 </ol>
<div class="row">
  <div class="col-md-8 col-md-offset-1">
  <div class="panel panel-warning">
    <div class="panel-heading">Editar Categoria</div>
  <div class="panel-body">
    <div class="col-md-8 col-md-offset-1">
    {!!Form::model($categorias,['route'=>['categoria.update',$categorias->id],'method'=>'PUT'])!!}
      <div class="form-group">
        {!!form::label('Nombre')!!}
  		{!!form::text('Nombre',null, ['id'=>'Nombre','class'=>'form-control'])!!}
      </div>
      <div class="form-group">
        {!!form::label('Descripcion')!!}
        {!!Form::text('Descripcion',null,['id'=>'Descripcion','class'=>'form-control'])!!}
      </div>   
      <div class="form-group">
        <button type="submit" class="btn btn-warning">Update</button>
        <a   href="{{url('categoria')}}"type="button" class="btn btn-info">Cancelar</a>
      </div>
    {!!Form::close()!!}
    </div>
  </div>
  </div>
     </div>
</div>
@endsection
