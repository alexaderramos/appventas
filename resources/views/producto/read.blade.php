 @extends('layouts.master')
@section('content')
	<h3 class="pull-left">Lista de Productos</h3>
	<p class="text-right"><a href="{{URL::to('producto/create')}}" class="btn btn-info fa fa-plus">Nuevo</a></p>
	<hr>
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
					<th>Imagen</th>
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
						<td> 
					    <img src="img_productos/{{ $producto->Foto }}" alt="img_{{ $producto->Descripcion  }}" style="max-width: 37px; background-position: center; " class="img-responsive">
								
						</td>	
						<td class="text-center">
						<a href="{{route('producto.edit',$producto->id)}}" class="btn btn-success btn-xs fa fa-eye"> Editar</a>
						<a href="{{route('producto.show',$producto->id)}}" class="btn btn-danger btn-xs fa fa-trash"> Delete</a>	
					
						</td>
					</tr>
				</tbody>
			@endforeach
		</table>
	</div>

@stop