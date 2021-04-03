@extends('navbar')

@section('title', 'Registro Producto')
	@section('Contenido')
	<form class="form-horizontal">
		{{csrf_field()}}
		<fieldset>
			<legend>Nueva Marca</legend>
			<div class="input-group mb-8">
			<label for="inputmarca" class="col-lg-2 control-label">Nombre de Marca</label>
			<div class="col-lg-8">
				<input type="text" class="form-control" name="marca" id="inputmarca">
			</div>
			</div>
			
				<div class="col-lg-8 col-lg-offset-2">
					<button type="submit" class="btn btn-primary">Guardar</button>
					<button type="reset" class="btn btn-default">Borrar</button>
				</div>
		</fieldset>
	</form>
@endsection
