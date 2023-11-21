<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserAkses
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        if (auth()->user()->role == $role) {
            return $next($request);
        }

        if (Auth::user()->role == 'admin') {
            return redirect('admin');
        } elseif (Auth::user()->role == 'sukadamai') {
            return redirect('sukadamai');
        } elseif (Auth::user()->role == 'kebunbaru') {
            return redirect('kebunbaru');
        } elseif (Auth::user()->role == 'rejosari') {
            return redirect('rejosari');
        } elseif (Auth::user()->role == 'margoyoso') {
            return redirect('margoyoso');
        } elseif (Auth::user()->role == 'payungraja') {
            return redirect('payungraja');
        }
    }
}
