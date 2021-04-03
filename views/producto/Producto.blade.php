@extends('navbar')

@section('title', 'Registro Producto')
	@section('Contenido')
	<form class="form-horizontal">
		{{csrf_field()}}
		<fieldset>
			<legend>Nuevo Producto</legend>
			<div class="input-group mb-3">
			<label for="inputnombre" class="col-lg-2 control-label">Nombre de Producto</label>
			<div class="col-lg-10">
				<input type="text" class="form-control" name="nombre" id="inputnombre">
			</div>
			</div>

			<div class="input-group mb-3">
			<label for="inputprecio" class="col-lg-2 control-label">Nombre de precio</label>
			<div class="col-lg-10">
				<input type="text" class="form-control" name="precio" id="inputprecio"> 
			</div>
			</div>

				<div class="form-group">
				<div class="col-lg-8 col-lg-offset-2">
  					<button class="btn btn-primary" type="button">Guardar</button>
  					<button class="btn btn-default" type="button">Borrar</button>
				</div>
				</div>
		</fieldset>
	</form>
@endsection