<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //on verifie si l'utilisateur est admin on le laisse passer sinon on redirige vers la page d'accueil
        if ($request->role=="client"){

        return $next($request);
        }

//
//        if($request->role === 'admin'){
//            return $next($request);
//        }
//        abort(403);
        return redirect()->route('dashboard');
    }
}
