<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,  $role): Response
    {
        // Vérifie si l'utilisateur est connecté et possède le rôle "admin"
        if (!Auth::check() || Auth::user()->role !== $role) {
            abort(403, 'Accès non autorisé.');
        }

        // Retourne une erreur 403 si l'accès est refusé
        abort(403, 'Accès refusé.');
    }
}
