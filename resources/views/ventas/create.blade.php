 @extends('layouts.app')
@section('title','Nueva venta')
@section('content')
<ol class="breadcrumb">
    <li><a href="{{url('home')}}">Home</a></li>
    <li><a href="{{url('venta')}}">Ventas</a></li>
    <li class="active bg-danger" >Nueva Venta</li>
 </ol>
 <!-- incluir etiqueta para mostrar los errores -->
 <div class="container-fluid">
<div class="row">
  <div class="col-md-12 col-md-offset">
  <div class="panel panel-warning">
    <div class="panel-heading">Nueva Venta</div>
  <div class="panel-body">
  
  <div class="col-md-12 form-horizontal formulario"> 
    <!--{!!Form::open(['route'=>'producto.store','method'=>'POST'])!!}-->
    <form action="">
      <div class=""><legend>Datos de Producto</legend></div>
      <div class="col-md-1">
        {!!form::label('Codigo')!!}
      </div>
      <div class="col-md-4">
         	{!!form::text('CodProducto',null, ['id'=>'CodProducto','class'=>'form-control', 'placeholder'=>'Ingrese Codigo de Producto'])!!}
      </div>
      <div class="col-md-2 form-group">
           <button type="submit" class="btn btn-success"><li class="fa fa-search"></li> Buscar</button>
      </div>
      <div class="col-md-1 form-group">
        {!!form::label('Precio')!!}
      </div>
      <div class="col-md-2 form-group">
         	{!!form::text('Precio',null, ['id'=>'CodProducto','class'=>'form-control', 'placeholder'=>'Precio'])!!}
      </div>
      <div class="col-md-1 form-group">
        {!!form::label('Stock')!!}
       </div>
         <div class="col-md-2">
           	{!!form::text('CodProducto',null, ['id'=>'CodProducto','class'=>'form-control', 'placeholder'=>'Stock'])!!}   
        </div>
       <div class="form-group">
        <div class="col-md-12 col-md-offset-1">
      </div>
      <div class="col-md-12">
        <div class="col-md col-md-offset-11">
        <button type="submit" class="btn btn-info"><li class="fa fa-cart-plus fa-2x" title="agregar al carrito"></li></button>    
      </div>    
      </div>
    </div>  <!--close formualrio-->     
  </div>
</form>
<div class="col-md-12"><div class="form-group"></div>
</div>

<div class=" row col-md-12"> 
<div class="col-md-8 form-horizontal"> 
  <div class="table-responsive">
		<table class="table table-bordered table-striped table-hover">
        <thead>
        <tr class="btn-warning">
          <th>Cant</th>
          <th>Codigo Producto</th>
          <th>Nombre</th>
          <th>Precio</th>
          <th>Total</th>	
         </tr>
         </thead>
				<tbody>
					<tr>
					
					</tr>
                </tbody>
		
		</table>
		 <div class=" col-md-12 form-group">
        <button type="submit" class="btn btn-success">Limpiar</button>
        <a   href="{{url('venta')}}"type="button" class="btn btn-info">Actualizar</a>
      </div>  
   
    </div>
   
</div><!--close table responsive-->

<div class="col-md-4 formventas">
  <div class="col-md-12">
    <!--<legend><small><center>Datos de de Boleta</center></small></legend>-->
       <div class=" col-md-12 precio form-group">
        {!!form::text('Precio',null, ['id'=>'precio','class'=>'form-control'])!!}  
       </div>
       
        <div class="col-md-4 form-group">
        {!!form::label('serie')!!}
        {!!form::text('serie',null, ['id'=>'serie','class'=>'form-control'])!!}   
       </div>
        <div class="col-md-8 form-group">
        {!!form::label('Factura')!!}
        {!!form::text('factura',null, ['id'=>'factura','class'=>'form-control'])!!}   
        </div>
        <div class="col-md-8 col-md-offset">
        {!!form::label('PrecioVenta')!!}
        {!!form::text('tatal',null, ['id'=>'total','class'=>'form-control'])!!}  
        </div>
         <div class="col-md-8 col-md-offset">
        {!!form::label('IGV %')!!}
        {!!form::text('tatal',null, ['id'=>'total','class'=>'form-control'])!!}  
        </div>
        <div class="col-md-8 col-md-offset">
         {!!form::label('total a pagar')!!}
        {!!form::text('tatal',null, ['id'=>'total','class'=>'form-control'])!!} 
        <button type="submit" class="btn-md btn btn-success">Imprimir</button>
        </div>
 </div>
</div>
</div><!--close table formulario  col-6-->

</div><!--close table formulario  col-12-->
     
    </div>
   </div>
  </div>
  </div>
</div>
</div>
</div>
@endsection