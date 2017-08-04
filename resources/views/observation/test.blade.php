<div class="container">
	<h1>Lista de Usuarios</h1>
	<h4><a href="{{ route('boys.index') }}">Listar niño</a></h4>
	<hr>
	<div class="table-responsive">
		@if($data)
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
					@foreach($data as $row)
					<tr>
						<td>{{$row->id}}</td>
						<td>{{$row->observation}}</td>
						<td>{{$row->image}}</td>
						<td>{{$row->created_at}}</td>
					</tr>
				</tbody>
					@endforeach
			</table>

		@endif	
	</div>
</div>	