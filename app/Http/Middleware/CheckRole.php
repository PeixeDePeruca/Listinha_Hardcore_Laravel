public function handle($request, \Closure $next, string $role)
{
    if (! $request->user() || $request->user()->role !== $role) {
        abort(403, 'Acesso não autorizado.');
    }

    return $next($request);
}