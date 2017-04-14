 @extends('layouts.app')
@section('content')
	<h3 class="pull-left">Lista de Clientes</h3>
	<p class="text-right"><a href="{{URL::to('cliente/create')}}" class="btn btn-info fa fa-plus">Nuevo</a></p>
	<hr>
	<div class="table-responsive">
		<table class="table table-bordered table-striped table-hover">
			<thead>
				<tr class="btn-warning">
					<th>Nombre</th>
					<th>Apellidos</th>
					<th>Telefono</th>
					<th>Direccion</th>
					<th>Settings</th>
				</tr>
			</thead>
			@foreach($clientes as $cliente)
				<tbody>
					<tr>
						<td>{{$cliente->Nombre}}</td>
						<td>{{$cliente->Apellidos}}</td>
						<td>{{$cliente->Telefono}}</td>
						<td>{{$cliente->Direccion}}</td>	
						<td class="text-center">
							<a href="{{route('cliente.edit',$cliente->id)}}" class="btn btn-success btn-xs fa fa-eye"> Editar</a>
							<a href="{{route('cliente.show',$cliente->id)}}" class="btn btn-danger btn-xs fa fa-trash"> Delete</a>	
						</td>
					</tr>
				</tbody>
			@endforeach
		</table>
	</div>

@stop