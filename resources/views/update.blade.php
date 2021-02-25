@extends('layout')

@section('content')

<div class="card mt-5">
    <div class="card-header">
        Atualizar Funcionário
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
        <form method="post" action="{{ route('funcionarios.update', $funcionario->id)}}">
            <div class="form-group">
                @csrf
                @method('PATCH')
                <label for="name">Nome</label>
                <input type="text" class="form-control" name="nome" value="{{ $funcionario->nome }}" />
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" value="{{ $funcionario->email }}" />
            </div>
            <div class="form-group">
                <label for="phone">Telefone</label>
                <input type="tel" class="form-control" name="telefone" value="{{ $funcionario->telefone }}" /> 
            </div>

            <button type="submit" class="btn btn-success btn-sm">Atualizar</button>
            <a href="{{ route('funcionarios.index')}}" class="btn btn-primary btn-sm">Voltar</a>
        </form>
    </div>
</div>
@endsection