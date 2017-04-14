 @extends('layouts.app')
@section('title','Eliminar Proveedor')
@section('content')
<ol class="breadcrumb">
   <li><a href="{{url('home')}}">Home</a></li>
    <li class=""><a href="{{url('home')}}">Proveedor</a></li>
     <li class="active">Eliminar Proveedor</li>
 </ol>
 <div class="row">
  <div class="col-md-8 col-md-offset">
  <div class="panel panel-warning">
    <div class="panel-heading"> Datos de Proveedor</div>
     <div class="panel-body">
      <legend class="bg-danger">Desea eliminar este Proveedor?</legend>
      
  {!!Form::open(['route'=>['proveedor.destroy',$proveedors->id],'method'=>'DELETE'])!!}
      <table class="table table-bordered">
        <thead style="font-family:Verdana" class="btn-warning">
          <th>Id</th>
          <th>Ruc</th>
          <th>Proveedor</th>
          <th>Telefono</th>
          <th>Direccion</th>
        </thead>
        <tbody>
           <tr>
              <td>{{$proveedors->id}}</td>
              <td>{{$proveedors->Ruc}}</td>
              <td>{{$proveedors->Proveedor}}</td>
              <td>{{$proveedors->Telefono}}</td>
              <td>{{$proveedors->Direccion}}</td>
           </tr>
        </tbody>
      </table>
      {!!Form::submit('Eliminar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Eliminar</span>','class'=>'btn btn-danger'])!!}
      <a href="{{url('proveedor')}}"type="button" class="btn btn-info">Cancelar</a>
      {!!Form::close()!!}
    </div>
  {!!Form::close()!!}
    </div>
  </div>
  </div>
</div>
</div>
@endsection
