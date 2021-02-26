@extends('layout')

@section('content')

<div class="mt-5">
    @if(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    <table class="table">
        <thead>
            <tr class="table-primary">
                <td># ID</td>
                <td>Nome</td>
                <td>Email</td>
                <td>Telefone</td>
                <td>Notificações pelo WhatsApp</td>
                <td>Ações</td>
            </tr>
        </thead>
        <tbody>
            @foreach($funcionarios as $funcionario)
                <tr>
                    <td>{{$funcionario->id}}</td>
                    <td>{{$funcionario->nome}}</td>
                    <td>{{$funcionario->email}}</td>
                    <td>{{$funcionario->telefone}}</td>
                    <td> <?php if ($funcionario->optin == 1) echo "SIM"; 
                          else echo "NÃO"; ?></td>
                   
                    <td>
                        <a href="{{ route('funcionarios.edit', $funcionario->id)}}" class="btn btn-success btn-sm">Editar</a>
                        <form action="{{ route('funcionarios.destroy', $funcionario->id)}}" method="post" style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('funcionarios.create')}}" class="btn btn-primary">Cadastrar</a>
</div>
@endsection