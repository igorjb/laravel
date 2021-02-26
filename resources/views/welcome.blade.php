@extends('layout')

@section('content')

<div class="card mt-5">
    <div class="card-header">
        Cadastrar Funcionário
    </div>

    <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="post" action="{{ route('funcionarios.store')}}">
            <div class="form-group">
                @csrf
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome"/>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email"/>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="tel" class="form-control" name="telefone"/>
            </div>
            <div class="form-group">
                <label for="optin">Desejo receber notificações de compras pelo WhatsApp</label>
                <input type="checkbox" name="optin"/>
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Adicionar</button>
            <a href="{{ route('funcionarios.index')}}" class="btn btn-success btn-sm">Voltar</a>
        </form>
    </div>
    
</div>
@endsection
