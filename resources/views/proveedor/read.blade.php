 @extends('layouts.app')
@section('content')
	<h3 class="pull-left">Lista de Proveedores</h3>
	<p class="text-right"><a href="{{URL::to('proveedor/create')}}" class="btn btn-info fa fa-plus">Nuevo</a></p>
	<hr>
	<div class="table-responsive">
		<table class="table table-bordered table-striped table-hover">
			<thead>
				<tr class="btn-warning">
                    <th>Id</th>
					<th>Ruc</th>
					<th>Proveedor</th>
                    <th>Telefono</th>
					<th>Direccion</th>
					<th>Settings</th>
				</tr>
			</thead>
			@foreach($proveedors as $proveedor)
				<tbody>
					<tr>
						<td>{{$proveedor->id}}</td>
						<td>{{$proveedor->Ruc}}</td>
						<td>{{$proveedor->Proveedor}}</td>
						<td>{{$proveedor->Telefono}}</td>
						<td>{{$proveedor->Direccion}}</td>	
						<td class="text-center">
						<a href="{{route('proveedor.edit',$proveedor->id)}}" class="btn btn-success btn-xs fa fa-eye"> Editar</a>
						<a href="{{route('proveedor.show',$proveedor->id)}}" class="btn btn-danger btn-xs fa fa-trash"> Delete</a>	
						</td>
					</tr>
				</tbody>
			@endforeach
		</table>
	</div>

@stop