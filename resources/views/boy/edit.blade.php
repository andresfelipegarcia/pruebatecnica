<div class="container">
	<h1>Registro de Observaciones</h1>
	<h4><a href="{{ route('boys.index') }}">Listar Niños</a></h4>
	<hr>
	<form>
		<input type="hidden" name="_token" value="{{csrf_token() }}">

		<div class="form-group">
			<label>Observaciones</label>
			<textarea type="text" name="text"></textarea>
		</div>

		<div class="form-group">
			<label for="exampleInputEmail">Imagen</label>
			<input type="file" name="imagen">
		</div>

		<div class="form-group">
			<label for="exampleInputEmail">Fecha</label>
			<input type="date" name="create_at">
		</div>

		<button type="submit" class="btn btn-default">Registrar</button>
	</form>
</div>