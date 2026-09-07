<?php

namespace Database\Seeders;

use App\Models\Aluno;
use Illuminate\Database\Seeder;

class AlunoSeeder extends Seeder
{
    public function run(): void
    {
        $cursos = ['Sistemas de Informação', 'Engenharia', 'Direito', 'Medicina', 'Administração'];

        for ($i = 1; $i <= 10; $i++) {
            Aluno::create([
                'nome' => 'Aluno Teste ' . $i,
                'email' => 'aluno' . $i . '@teste.com',
                'curso' => $cursos[array_rand($cursos)],
            ]);
        }
    }
}