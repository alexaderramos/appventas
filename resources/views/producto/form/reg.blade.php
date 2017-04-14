<div class=""><legend>Datos de Producto</legend></div>

<div class="form-group">
	<div class="col-md-4">
		<label for="proveedor">Provedor</label>
		{!! Form::select('idProveedor', $proveedores,''	,['class'=>'form-control']) !!}
	</div>

	<div class="col-md-4">
		<label for="proveedor">Provedor</label>
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

	<div class="col-md-12">
		<label for="descripcion">Descripcion</label>
		<textarea name="Descripcion" class="form-control"></textarea>
	</div> 



	<div class="col-md-6">
		<label for="foto"></label>
		<label><span class="glyphicon glyphicon-picture"></span> Foto</label>
		{!! Form::file('Foto',['class'=>'form-control','accept'=>'image/*']) !!}
	</div>

</div>

<div class="form-group col-md-4">
<button type="submit" class="btn btn-warning">Guardar</button>
<a   href="#" type="button" class="btn btn-info">Cancelar</a>
</div>