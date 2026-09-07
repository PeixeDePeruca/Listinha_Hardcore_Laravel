namespace App\Policies;

use App\Models\Aluno;
use App\Models\User;

class AlunoPolicy
{
    // Apenas Admin pode cadastrar
    public function create(User $user): bool
    {
        return $user->role === 'admin';
    }

    // Admin e Professor podem editar
    public function update(User $user, Aluno $aluno): bool
    {
        return in_array($user->role, ['admin', 'professor']);
    }

    // Apenas Admin pode excluir
    public function delete(User $user, Aluno $aluno): bool
    {
        return $user->role === 'admin';
    }
}