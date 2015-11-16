
@extends('templates.template')

@section('content')
	Listar postagens...<br/>
	{!!@HTML::link("postagem/cadastrar", "Adicionar")!!}
	<table border="1">
		<tr>
			<th>Nome</th>
			<th>Conteúdo</th>
			<th>Ações</th>
		</tr>
		@foreach($postagens as $postagem)
		<tr>
			<td>{{$postagem->titulo}}</td>
			<td>{{$postagem->conteudo}}</td>
			<td>
				{!! HTML::link("/postagem/editar/{$postagem->id_postagem}", "Editar")!!} /
				{!! HTML::link("/postagem/deletar/{$postagem->id_postagem}", "Deletar") !!}
			</td>
		</tr>
		@endforeach
	</table>	
	
@stop

