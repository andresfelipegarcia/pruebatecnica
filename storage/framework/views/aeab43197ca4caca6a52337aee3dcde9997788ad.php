<div class="container">
	<h1>Lista de Usuarios</h1>
	<h4><a href="<?php echo e(route('boys.create')); ?>">Registrar niño</a></h4>
	<hr>

	<div class="table-responsive">
		<?php if($data): ?>
			<table class="table">
				<thead>
					<tr>
						<td>Nombres</td>
						<td></td>
					</tr>
				</thead>
				<tbody>
					<?php foreach($data as $row): ?>
					<tr>
						<td><?php echo e($row->nombre); ?></td>
						<td>
							<a href="<?php echo e(route('boys.edit', $row->id)); ?>" class="btn btn-info">Observaciones</a>
						</td>
					</tr>
				</tbody>
					<?php endforeach; ?>
			</table>
		<?php endif; ?>	
	</div>
</div>