@extends('templates.template')

@section('content')
	<h1>Cadastrar</h1>
	
	{!! Form::open(array('url' => 'postagem/cadastrar', 'class' => 'teste')) !!}
			{!! Form::text('titulo', '', array('placeholder' => 'Titulo')) !!} <br/>
			{!! Form::textarea('conteudo', '', array('placeholder' => 'Conteúdo')) !!}
			{!! Form::submit('Enviar dados') !!}
	{!! Form::close() !!}
@stop
