@extends('templates.template')

@section('content')
	<h1>Gestão de Postagem</h1>
	
	@if( isset($postagem->id_postagem))
		{!! Form::open(array('url' => "postagem/editar/$postagem->id_postagem", 'class' => 'teste')) !!}
	@else
		{!! Form::open(array('url' => 'postagem/cadastrar', 'class' => 'teste')) !!}
	@endif
			{!! Form::text('titulo', isset($postagem->titulo) ? $postagem->titulo : '', array('placeholder' => 'Titulo')) !!} <br/>
			{!! Form::textarea('conteudo', isset($postagem->conteudo) ? $postagem->conteudo : '', array('placeholder' => 'Conteúdo')) !!}
			{!! Form::submit('Enviar dados') !!}
	{!! Form::close() !!}

	
@stop
