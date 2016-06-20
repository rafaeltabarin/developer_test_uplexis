<html>
<head>
	<title>Usuarios</title>
</head>

<body>

@extends('layouts.app')

@section('content')

<div class="container">
	<h1>Usuarios</h1>

	<table class="table table-striped table-bordered table-hover">
	<thead>
	<tr>
		<th>ID</th>
		<th>Usuario</th>
		<th>Senha</th>
		<th>Acao</th>
	</tr>
	</thead>
	<tbody>
		@foreach($usuarios as $usuario)
			<tr>
				<td>{{ $usuario->id }}</td>
				<td>{{ $usuario->usuario }}</td>
				<td>{{ $usuario->password }}</td>
				<td>
					<a href = "{{ route('usuarios.edit', ['id' => $usuario->id]) }}" class = "btn-sm btn-success">Editar</a>
					<a href = "{{ route('usuarios.destroy', ['id' => $usuario->id]) }}" class = "btn-sm btn-danger">Remover</a>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>

<br/>

<a href="{{ route('usuarios.create') }}" class="btn btn-default">Novo usuario</a>

</div>
@endsection
</body>
<html>