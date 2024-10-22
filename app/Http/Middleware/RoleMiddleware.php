<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        // Pastikan user sudah login
        if (!Auth::check()) {
            return redirect('/login');
        }

        // Cek apakah role user sesuai dengan parameter yang diberikan
        $user = Auth::user();

        Log::info('User ID: ' . $user->id);
        Log::info('User Role ID: ' . $user->role_id);
        Log::info('Required Role ID: ' . $role);

        if ($user->role_id !== (int)$role) {
            // Jika role tidak sesuai, bisa diarahkan ke halaman yang diinginkan
            return redirect('/unauthorized');
        }

        // Jika role sesuai, lanjutkan request
        return $next($request);
    }
}
