@extends('layouts.app')

@section('content')
	<div class="container">
		<h1>Editar Usuario: {{$usuario->usuario}}</h1>

		{!! Form::open(['route' => ['usuarios.update', $usuario->id], 'method' => 'put']) !!}
		
		@if ($errors->any())
			<ul class="alert alert-warning">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
			</ul>
		@endif

		<div class="form-group">
			{!! Form::label('usuario', 'Usuario:') !!}
			{!! Form::text('usuario', $usuario->usuario, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('password', 'Senha:') !!}<br/>
			{!! Form::text('password', $usuario->password, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
		</div>

		{!! Form::close() !!}
	</div>
@endsection