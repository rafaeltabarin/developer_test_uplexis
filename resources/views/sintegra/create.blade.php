@extends('layouts.app')

@section('content')
	<div class="container">
		<h1>Novo Registro de Consulta</h1>

		{!! Form::open(['route' => 'sintegra.store']) !!}
		
		@if ($errors->any())
			<ul class="alert alert-warning">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
			</ul>
		@endif

		<div class="form-group">
			{!! Form::label('idusuario', 'Id do Usuario:') !!}
			 {!! Form::select('idusuario', $usuarios, null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('cnpj', 'CNPJ:') !!}<br/>
			{!! Form::text('cnpj', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('resultado_json', 'Resultado da Consulta:') !!}<br/>
			{!! Form::textarea('resultado_json', null, ['class' => 'form-control']) !!}
		</div>


		<div class="form-group">
			{!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
		</div>

		{!! Form::close() !!}
	</div>
@endsection