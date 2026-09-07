<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Http\Requests\AlunoRequest;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        $alunos = Aluno::all();
        return view('alunos.index', compact('alunos'));
    }

    public function create()
    {
        $this->authorize('create', Aluno::class);

        return view('alunos.create');
    }

    public function store(AlunoRequest $request)
    {
        $this->authorize('create', Aluno::class);

        Aluno::create($request->validated());

        return redirect()->route('alunos.index')->with('success', 'Aluno cadastrado com sucesso!');
    }

    public function show(string $id)
    {
        $aluno = Aluno::findOrFail($id);
        return view('alunos.show', compact('aluno'));
    }

    public function edit(string $id)
    {
        $aluno = Aluno::findOrFail($id);

        $this->authorize('update', $aluno);

        return view('alunos.edit', compact('aluno'));
    }

    public function update(AlunoRequest $request, string $id)
    {
        $aluno = Aluno::findOrFail($id);

        $this->authorize('update', $aluno);

        $aluno->update($request->validated());

        return redirect()->route('alunos.index')->with('success', 'Aluno atualizado com sucesso!');
    }

    public function destroy(string $id)
    {
        $aluno = Aluno::findOrFail($id);

        $this->authorize('delete', $aluno);

        $aluno->delete();

        return redirect()->route('alunos.index')->with('success', 'Aluno removido com sucesso!');
    }
}