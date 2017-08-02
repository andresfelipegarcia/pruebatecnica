<div class="container">
	<h1>Registro de Observaciones</h1>
	<h4><a href="<?php echo e(route('boys.index')); ?>">Listar Niños</a></h4>
	<hr>

	<form method="post" action="/observaciones">
		<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

		<div class="form-group">
			<label>Observaciones</label>
			<textarea type="text" name="texto"></textarea>
		</div>

		<div class="form-group">
			<label for="exampleInputEmail">Imagen</label>
			<input type="file" name="image">
		</div>

		<button type="submit" class="btn btn-default">Registrar</button>
	</form>

</div>