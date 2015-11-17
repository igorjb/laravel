
@extends('templates.template')

@section('content')
	<!--<p>{!!HTML::link("postagem/cadastrar", "Adicionar")!!}</p>-->
	<a href="{!!url('postagem/cadastrar')!!}" title="Cadastrar">
		<button type="button" class="btn btn-primary">Cadastrar</button>
	</a>
	<h2>Listagem das postagens</h2>
	<table class="table table-striped">
		<tr>
			<th>Nome</th>
			<th>Conteúdo</th>
			<th>Ações</th>
		</tr>
		@forelse($postagens as $postagem)
		<tr>
			<td>{{$postagem->titulo}}</td>
			<td>{{$postagem->conteudo}}</td>
			<td>
				<!--{!! HTML::link("/postagem/editar/{$postagem->id_postagem}", "Editar")!!} -->
				<a href='{!!url("/postagem/editar/{$postagem->id_postagem}")!!}' title="Editar">
					<span class="glyphicon glyphicon-edit"></span>
				</a>/
				<!--{!! HTML::link("/postagem/deletar/{$postagem->id_postagem}", "Deletar") !!}-->
				<a href='{!!url("/postagem/deletar/{$postagem->id_postagem}")!!}' title="Deletar"
					onclick="return confirm('Deseja realmente deletar a postagem?')">
					<span class="glyphicon glyphicon-trash"></span>
				</a>
			</td>
		</tr>
		@empty
		<tr>
			<td colspan="3">Nenhuma postagem</td>
		</tr>
		@endforelse
	</table>	


@stop

