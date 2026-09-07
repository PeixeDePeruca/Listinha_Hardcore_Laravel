@extends('layouts.app')

@section('content')
    <h1>- Lista de Alunos -</h1>

    @if (session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif

    <a href="{{ route('alunos.create') }}">+ Cadastrar novo aluno</a>

    @if(empty($alunos))
        <p>Nenhum aluno cadastrado no momento.</p>
    @else
        <ul>
            @foreach($alunos as $aluno)
                <li>
                    {{ $aluno->nome }} - {{ $aluno->email }} - {{ $aluno->curso }}
                    <a href="{{ route('alunos.show', $aluno->id) }}">Ver</a>
                    <a href="{{ route('alunos.edit', $aluno->id) }}">Editar</a>
                    <form action="{{ route('alunos.destroy', $aluno->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Tem certeza?')">Excluir</button>
                    </form>
                </li>
            @endforeach
        </ul>
    @endif
@endsection