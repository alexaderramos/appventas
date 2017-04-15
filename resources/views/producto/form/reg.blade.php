<div class=""><legend>Datos de Producto</legend></div>
<div class="form-group">
	<div class="col-md-4">
		<label for="proveedor">Provedor</label>
		{!! Form::select('idProveedor', $proveedores,''	,['class'=>'form-control']) !!}
	</div>
	<div class="col-md-4">
		<label for="proveedor">Categoria</label>
		{!! Form::select('idCategoria', $categorias,''	,['class'=>'form-control']) !!}
	</div>
	<div class="col-md-4"> 
		<label for="cp">Codigo del producto</label>
		<input type="input" name="CodProducto" placeholder="Ingrese Codigo del producto" class="form-control">
	</div>
	<div class="col-md-4">
		<label for="preciocosto">Precio Costo</label>
		<input type="input" name="PrecioCosto" placeholder="Precio del costo" class="form-control">
	</div>
	<div class="col-md-4">
		<label for="precioventa">Precio Venta</label>
		<input type="input" name="PrecioVenta" placeholder="Precio de la venta" class="form-control">
	</div>
	<div class="col-md-4">
		<label for="cantidad">Cantidad</label>
		<input type="number" name="Cantidad"  placeholder="Cantidad en unidades" min="1" class="form-control">
	</div>
	<div class="col-md-6">
		<label for="descripcion">Descripcion</label>
		<input name="Descripcion" class="form-control" placeholder="Nombre del producto"></input>
	</div> 
	<div class="col-md-6">
		<label for="foto"></label>
		<label><span class="glyphicon glyphicon-picture"></span> Foto</label>
		{!! Form::file('Foto',['class'=>'btn btn-default btn-file','accept'=>'image/*']) !!}
	</div>

</div>

<div class="form-group col-md-4">
<button type="submit" class="btn btn-warning">Guardar</button>
<a href="{{url('producto')}}"type="button" class="btn btn-info">Cancelar</a>
</div>