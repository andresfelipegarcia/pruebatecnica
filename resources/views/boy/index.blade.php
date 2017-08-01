<div class="container">
	<h1>Lista de Usuarios</h1>
	<h4><a href="{{ route('boys.create') }}">Registrar niño</a></h4>
	<hr>

	<div class="table-responsive">
		@if($data)
			<table class="table">
				<thead>
					<tr>
						<td>Nombres</td>
						<td></td>
					</tr>
				</thead>
				<tbody>
					@foreach($data as $row)
					<tr>
						<td>{{$row->nombre}}</td>
						<td>
							<a href="{{ route('boys.edit', $row->id) }}" class="btn btn-info">Observaciones</a>
						</td>
					</tr>
				</tbody>
					@endforeach
			</table>
		@endif	
	</div>
</div>