@extends('layouts.app') 
@section('content') 
<h1>- Alunos do Curso: {{ $curso->nome }} -

</h1> @if($curso->alunos->isEmpty()) 
<p>Nenhum aluno matriculado neste curso.

</p> @else 
<ul> @foreach($curso->alunos as $aluno) 
    <li>{{ $aluno->nome }} - {{ $aluno->email }}

    </li> @endforeach 
</ul> @endif @endsection