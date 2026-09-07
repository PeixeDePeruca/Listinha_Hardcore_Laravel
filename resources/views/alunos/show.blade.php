@extends('layouts.app')

@section('content')
    <h1>- Detalhes do Aluno -</h1>

    <p><strong>Nome:</strong> {{ $aluno->nome }}</p>
    <p><strong>E-mail:</strong> {{ $aluno->email }}</p>
    <p><strong>Curso:</strong> {{ $aluno->curso }}</p>

    <a href="{{ route('alunos.edit', $aluno->id) }}">Editar</a>
    <a href="{{ route('alunos.index') }}">Voltar</a>

    <form action="{{ route('alunos.destroy', $aluno->id) }}" method="POST" style="display:inline">
        @csrf
        @method('DELETE')
        <button type="submit">Excluir</button>
    </form>
@endsection