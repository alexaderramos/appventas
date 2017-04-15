 @extends('layouts.master')
@section('title','Eliminar Producto')
@section('content')
<ol class="breadcrumb">
   <li><a href="{{url('home')}}">Home</a></li>
    <li class=""><a href="{{url('producto')}}">Producto</a></li>
     <li class="active">Eliminar producto</li>
 </ol>
 <div class="row">
  <div class="col-md-8 col-md-offset">
  <div class="panel panel-warning">
    <div class="panel-heading"> Datos de Producto</div>
     <div class="panel-body">
      <legend class="bg-danger">Desea eliminar este Producto?</legend>
  {!!Form::open(['route'=>['producto.destroy',$productos->id],'method'=>'DELETE'])!!}
  
      <table class="table table-bordered">
        <thead style="font-family:Verdana" class="btn-warning">
          <th>Id</th>
          <th>CodProducto</th>
          <th>Descripcion</th>
          <th>Precio Costo</th>
          <th>Precio Venta</th>
          <th>Stock</th>
        </thead>
        <tbody>
           <tr>
              <td>{{$productos->id}}</td>
              <td>{{$productos->CodProducto}}</td>
              <td>{{$productos->Descripcion}}</td>
              <td>{{$productos->PrecioCosto}}</td>
              <td>{{$productos->PrecioVenta}}</td>
               <td>{{$productos->Cantidad}}</td>
           </tr>
        </tbody>
      </table>
      {!!Form::submit('Eliminar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Eliminar</span>','class'=>'btn btn-danger'])!!}
      <a href="{{url('producto')}}"type="button" class="btn btn-info">Cancelar</a>
      {!!Form::close()!!}
    </div>
  {!!Form::close()!!}
    </div>
  </div>
  </div>
</div>
</div>
@endsection
