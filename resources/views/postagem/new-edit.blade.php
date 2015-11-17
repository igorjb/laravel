@extends('templates.template')

@section('content')

	<h1>{!!$tituloMostra or 'Gestão de Postagem'!!}</h1>
	
	@if( count($errors) > 0)
		<div class="alert alert-danger">
			@foreach( $errors->all() as $message )
				<p>{!!$message!!}</p>
			@endforeach
		</div>
	@endif

	@if( isset($postagem->id_postagem))
		{!! Form::open(array('url' => "postagem/editar/$postagem->id_postagem", 'class' => 'teste')) !!}
	@else
		{!! Form::open(array('url' => 'postagem/cadastrar', 'class' => 'teste')) !!}
	@endif
			<div class="form-group">
				{!! Form::text('titulo', isset($postagem->titulo) ? $postagem->titulo : '', array('placeholder' => 'Titulo', 'class' => 'form-control')) !!}
			</div>
			<div class="form-group">
				{!! Form::textarea('conteudo', isset($postagem->conteudo) ? $postagem->conteudo : '', array('placeholder' => 'Conteúdo', 'class' => 'form-control')) !!}
			</div>
			{!! Form::submit('Salvar', array('class' => 'btn btn-info')) !!}
			<a href="{!!url('postagem')!!}" title="Voltar">
				<button type="button" class="btn btn-primary">Voltar</button>
			</a>
	{!! Form::close() !!}



@stop
