 @extends('layouts.app')

@section('content')
	<div class="row">
		<h3 class="pull-left">Lista de Productos</h3>
	<p class="text-right"><a href="{{URL::to('producto/create')}}" class="btn btn-info fa fa-plus">Nuevo</a></p>
	</div>

	<div class=" row " style="padding-bottom: 10%;">
		@include('mensajes.success')
	
		<div class="table-responsive">
			<table class="table table-bordered table-striped table-hover">
				<thead>
					<tr class="btn-warning">
					    <th>Id</th>
						<th>Proveedor</th>
						<th>CodProducto</th>
						<th>Descripcion</th> 
						<th> <li class="fa fa-money"></li> PrecioCosto</th>
	                    <th> <li class="fa fa-money"></li> PrecioVenta</th>
	                    <th>Stock</th>
						<th>Settings</th>
					</tr>
				</thead>
				@foreach($productos as $producto)
					<tbody>
						<tr>
						    <td>{{$producto->id}}</td>
							<td>{{$producto->Proveedor}}</td>
							<td>{{$producto->CodProducto}}</td>
							<td>{{$producto->Descripcion}}</td>	
							<td>S/.{{$producto->PrecioCosto}}</td>
							<td>S/.{{$producto->PrecioVenta}}</td>	
	                        <td>{{$producto->Cantidad}}</td>	
							<td class="text-center">

							</td>
						</tr>
					</tbody>
				@endforeach
			</table>
		</div>
		{{-- {!! $productos->render() !!} --}}
	</div>

@stop