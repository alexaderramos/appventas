 @extends('layouts.app')
@section('title','Eliminar Cliente')
@section('content')
<ol class="breadcrumb">
   <li><a href="{{url('home')}}">Home</a></li>
    <li class=""><a href="{{url('cliente')}}">Cliente</a></li>
     <li class="active">Eliminar Cliente</li>
 </ol>
 <div class="row">
  <div class="col-md-8 col-md-offset">
  <div class="panel panel-warning">
    <div class="panel-heading"> Datos de Cliente</div>
     <div class="panel-body">
      <legend class="bg-danger">Desea eliminar este Cliente?</legend>
  {!!Form::open(['route'=>['cliente.destroy',$clientes->id],'method'=>'DELETE'])!!}
      <table class="table table-bordered">
        <thead style="font-family:Verdana" class="btn-warning">
          <th>Id</th>
          <th>Nombre</th>
          <th>Apellidos</th>
          <th>Telefono</th>
          <th>Direccion</th>
        </thead>
        <tbody>
           <tr>
              <td>{{$clientes->id}}</td>
              <td>{{$clientes->Nombre}}</td>
              <td>{{$clientes->Apellidos}}</td>
              <td>{{$clientes->Telefono}}</td>
              <td>{{$clientes->Direccion}}</td>
           </tr>
        </tbody>
      </table>
      {!!Form::submit('Eliminar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Eliminar</span>','class'=>'btn btn-danger'])!!}
      <a href="{{url('cliente')}}"type="button" class="btn btn-info">Cancelar</a>
      {!!Form::close()!!}
    </div>
  {!!Form::close()!!}
    </div>
  </div>
  </div>
</div>
</div>
@endsection
