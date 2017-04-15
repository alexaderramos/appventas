 @extends('layouts.master')
@section('title','Nueva Categoria')
@section('content')
<ol class="breadcrumb">
    <li><a href="{{url('home')}}">Home</a></li>
    <li><a href="{{url('categoria')}}">Categorias</a></li>
    <li class="active">Nueva Categoria</li>
 </ol>
 <!-- incluir etiqueta para mostrar los errores -->
 <div class="">
  @include('mensajes.mensajes')
 </div>
  <div class="col-md-6 col-md-offset-3">
  <div class="panel panel-warning">
    <div class="panel-heading">Nueva Categoria</div>
  <div class="panel-body">
  <div class="col-md-10 form-horizontal col-md-offset-1">  

    {!!Form::open(['route'=>'categoria.store','method'=>'POST'])!!}
     <div class="form-group">
      <div class="col-md-4 col-md-offset-1">
      {!!form::label('Nombre')!!}
      </div>
      <div class="col-md-7">
     	{!!form::text('Nombre',null, ['id'=>'Nombre','class'=>'form-control', 'placeholder'=>'Ingrese nombre de categoria'])!!}   
      </div>
  		</div> 
      <div class="form-group">
        <div class="col-md-4 col-md-offset-1">
          {!!form::label('Descripcion')!!}
         </div>
      <div class="col-md-7">
          	{!!form::text('Descripcion',null, ['id'=>'Descripcion','class'=>'form-control', 'placeholder'=>'Ingrese descrpcion'])!!}
      </div> 
  		 </div> 
      <div class="form-group">
       <div class="col-md-12 col-md-offset-8">
        <button type="submit" class="btn btn-warning">Guardar</button>
        <a href="{{url('categoria')}}"type="button" class="btn btn-info">Listar</a>
       </div>
      </div>
    {!!Form::close()!!}
    </div>

  </div>
  </div>
</div>
</div>
@endsection