<html>
<head>
	<title>Registros de Consulta</title>
</head>

<body>

@extends('layouts.app')

@section('content')

<div class="container">
	<h1>Registros de Consulta</h1>

	<table class="table table-striped table-bordered table-hover">
	<thead>
	<tr>
		<th>ID</th>
		<th>ID do Usuario</th>
		<th>CNPJ</th>
		<th>Resultado</th>
		<th>Acao</th>
	</tr>
	</thead>
	<tbody>
		@foreach($sintegra as $sintegra)
			<tr>
				<td>{{ $sintegra->id }}</td>
				<td>{{ $sintegra->idusuario }}</td>
				<td>{{ $sintegra->cnpj }}</td>
				<td>{{ $sintegra->resultado_json }}</td>
				<td>
					<a href = "{{ route('sintegra.edit', ['id' => $sintegra->id]) }}" class = "btn-sm btn-success">Editar</a>
					<a href = "{{ route('sintegra.destroy', ['id' => $sintegra->id]) }}" class = "btn-sm btn-danger">Remover</a>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>

<br/>

<a href="{{ route('sintegra.create') }}" class="btn btn-default">Novo Registro de Consulta</a>

</div>
@endsection
</body>
<html>