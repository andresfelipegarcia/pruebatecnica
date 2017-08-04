<div class="container">
	<h1>Lista de Usuarios</h1>
	<h4><a href="{{ route('boys.create') }}">Registrar niño</a></h4>
	<h4><a href="{{ url('/observation/test') }}">Lista Observaciones</a></h4>
	<hr>

	<div class="table-responsive">
		@if($data)
			<table class="table">
				<thead>
					<tr>
						<td>Id</td>
						<td>Nombres</td>
						<td>Observaciones</td>
					</tr>
				</thead>
				<tbody>
					@foreach($data as $row)
					<tr>
						<td>{{$identificador=$row->id}}</td>
						<td>{{$row->nombre}}</td>
						<td><input id="prueba" type="button" value="Registrar Observacion" onclick="muestraMensaje({{$identificador}});"></td>
					</tr>
				</tbody>
					@endforeach
			</table>

		@endif	
	</div>
</div>
	<script>
	var id;
        function muestraMensaje(id){
			console.log('Identificador'+id);
			window.location.href = "observations?"+id
		}
	</script>
