@extends('layouts.app')

@section('content')
    <h1>- Lista de Alunos -</h1>

    @php 
        $alunos = ['João Silva', 'Maria Santos', 'Pedro Oliveira']; 
    @endphp

    @if(empty($alunos))
        <p>Nenhum aluno cadastrado no momento.</p>
    @else
        <ul>
            @foreach($alunos as $aluno)
                <li>{{ $aluno }}</li>
            @endforeach
        </ul>
    @endif
@endsection