 @extends('layouts.app')
@section('content')
	<h3 class="pull-left">Lista de Categorias</h3>
	<p class="text-right"><a href="{{URL::to('categoria/create')}}" class="btn btn-info fa fa-plus">Nuevo</a></p>
	<hr>
	<div class="table-responsive">
	<div class="col-md-12">
	<!--@include('mensajes.mensajes')-->
	
	 @include('mensajes.mensajes')
   
	</div>
		<table class="table table-bordered table-striped table-hover">
			<thead>
				<tr class="btn-warning">
					<th>id</th>
					<th>Nombre</th>
					<th>Descripcion</th>		
					<th>Settings</th>
				</tr>
			</thead>
			@foreach($categorias as $categoria)
				<tbody>
					<tr>
						<td>{{$categoria->id}}</td>
						<td>{{$categoria->Nombre}}</td>
						<td>{{$categoria->Descripcion}}</td>
						<td class="text-center">
							<a href="{{route('categoria.edit',$categoria->id)}}" class="btn btn-success btn-xs fa fa-eye"> Editar</a>
							<a href="{{route('categoria.show',$categoria->id)}}" class="btn btn-danger btn-xs fa fa-trash"> Delete</a>	
						</td>
					</tr>
				</tbody>
			@endforeach
		</table>
	</div>

@stop