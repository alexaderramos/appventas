 @extends('layouts.master')
@section('title','Eliminar Categoria')
@section('content')
<ol class="breadcrumb">
   <li><a href="{{url('home')}}">Home</a></li>
    <li class=""><a href="{{url('categoria')}}">Categoria</a></li>
     <li class="active">Eliminar Categoria</li>
 </ol>
 <div class="row">
  <div class="col-md-8 col-md-offset">
  <div class="panel panel-warning">
    <div class="panel-heading"> Datos de Categoria</div>
     <div class="panel-body">
      <legend class="bg-danger">Desea eliminar esta Categiria?</legend>
      
  {!!Form::open(['route'=>['categoria.destroy',$categorias->id],'method'=>'DELETE'])!!}
      <table class="table table-bordered">
        <thead style="font-family:Verdana" class="btn-warning">
          <th>Id</th>
          <th>Nombre</th>
          <th>Descripcion</th>
        </thead>
        <tbody>
           <tr>
              <td>{{$categorias->id}}</td>
              <td>{{$categorias->Nombre}}</td>
              <td>{{$categorias->Descripcion}}</td>
             
           </tr>
        </tbody>
      </table>
      {!!Form::submit('Eliminar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Eliminar</span>','class'=>'btn btn-danger'])!!}
      <a href="{{url('categoria')}}"type="button" class="btn btn-info">Cancelar</a>
      {!!Form::close()!!}
    </div>
  {!!Form::close()!!}
    </div>
  </div>
  </div>
</div>
</div>
@endsection
