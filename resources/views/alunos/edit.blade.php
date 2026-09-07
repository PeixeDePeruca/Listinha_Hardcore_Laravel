@extends('layouts.app')

@section('content')
    <h1>- Editar Aluno -</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('alunos.update', $aluno->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" value="{{ old('nome', $aluno->nome) }}">
        </div>

        <div>
            <label for="email">E-mail:</label>
            <input type="email" name="email" id="email" value="{{ old('email', $aluno->email) }}">
        </div>

        <div>
            <label for="curso">Curso:</label>
            <input type="text" name="curso" id="curso" value="{{ old('curso', $aluno->curso) }}">
        </div>

        <button type="submit">Atualizar</button>
    </form>
@endsection