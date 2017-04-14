<div class="form-group">
        {!!form::label('Ruc')!!}
  			{!!form::text('Ruc',null, ['id'=>'Ruc','class'=>'form-control', 'placeholder'=>'Ingrese Ruc'])!!}
      </div> 
     <div class="form-group">
        {!!form::label('Proveedor')!!}
  			{!!form::text('Proveedor',null, ['id'=>'Proveedor','class'=>'form-control', 'placeholder'=>'Ingrese Proveedor'])!!}
      </div> 
      <div class="form-group">
        {!!form::label('Telefono')!!}
  			{!!form::text('Telefono',null, ['id'=>'Telfono','class'=>'form-control', 'placeholder'=>'Ingrese Telefono'])!!}
      </div>
      <div class="form-group">
        {!!form::label('Direccion')!!}
        {!!Form::text('Direccion',null,['id'=>'Direccion','class'=>'form-control', 'placeholder'=>'Ingrese direccion'])!!}
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-warning">Guardar</button>
        <a   href="{{url('proveedor')}}"type="button" class="btn btn-info">Cancelar</a>
      </div>