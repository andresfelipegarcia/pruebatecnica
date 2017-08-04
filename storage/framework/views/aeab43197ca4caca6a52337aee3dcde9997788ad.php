<div class="container">
	<h1>Lista de Usuarios</h1>
	<h4><a href="<?php echo e(route('boys.create')); ?>">Registrar niño</a></h4>
	<h4><a href="<?php echo e(url('/observation/test')); ?>">Lista Observaciones</a></h4>
	<hr>

	<div class="table-responsive">
		<?php if($data): ?>
			<table class="table">
				<thead>
					<tr>
						<td>Id</td>
						<td>Nombres</td>
						<td>Observaciones</td>
					</tr>
				</thead>
				<tbody>
					<?php foreach($data as $row): ?>
					<tr>
						<td><?php echo e($identificador=$row->id); ?></td>
						<td><?php echo e($row->nombre); ?></td>
						<td><input id="prueba" type="button" value="Registrar Observacion" onclick="muestraMensaje(<?php echo e($identificador); ?>);"></td>
					</tr>
				</tbody>
					<?php endforeach; ?>
			</table>

		<?php endif; ?>	
	</div>
</div>
	<script>
	var id;
        function muestraMensaje(id){
			console.log('Identificador'+id);
			window.location.href = "observations?"+id
		}
	</script>
