@extends('layouts.app')

@section('content')
    <h1>- Lista de Alunos -</h1>

    @if(empty($alunos))
        <p>Nenhum aluno cadastrado no momento.</p>
    @else
        <ul>
            @foreach($alunos as $aluno)
                <li>{{ $aluno->nome }} - {{ $aluno->email }} - {{ $aluno->curso }}</li>
            @endforeach
        </ul>
    @endif
@endsection