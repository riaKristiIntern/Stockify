<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $roles): Response
    {
        $roles = explode(',', $roles);
        // Pastikan user sudah login
        // if (auth()->check() && in_array(auth()->user()->role, $roles)) {
        //     return $next($request);
        // }

        // untuk sementara tanpa login
        if (true && in_array('admin', $roles)) {
            return $next($request);
        }

        // Jika tidak, arahkan ke halaman error atau tampilkan pesan
        return response()->view('errors.unauthorized', [], 403);
    }
}
