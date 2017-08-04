<div class="container">
	<h1>Lista de Usuarios</h1>
	<h4><a href="<?php echo e(route('boys.index')); ?>">Listar niño</a></h4>
	<hr>
	<div class="table-responsive">
		<?php if($data): ?>
			<table class="table">
				<thead>
					<tr>
						<td>Id</td>
						<td>Observacion</td>
						<td>Imagen</td>
						<td>Creacion</td>
					</tr>
				</thead>
				<tbody>
					<?php foreach($data as $row): ?>
					<tr>
						<td><?php echo e($row->id); ?></td>
						<td><?php echo e($row->observation); ?></td>
						<td><?php echo e($row->image); ?></td>
						<td><?php echo e($row->created_at); ?></td>
					</tr>
				</tbody>
					<?php endforeach; ?>
			</table>

		<?php endif; ?>	
	</div>
</div>	