<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Aluno;

class AlunoSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            Aluno::create([
                'nome' => "Aluno Teste {$i}",
                'curso' => $i % 2 == 0 ? 'Engenharia' : 'Sistemas de Informação',
            ]);
        }
    }
}