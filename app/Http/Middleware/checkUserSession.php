<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class checkUserSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && Auth::user()->role == 0) {
            if ($request->session()->has('user_email'))
            {
                return $next($request);
            }
            // هنا هيتم التوجيه لصفحة تسجيل الخروج
            return redirect()->route('userLogout');
        }
        return redirect()->route('loginPage')->with('error', 'حدث خطأ ما يرجى التواصل مع المسئولين');
    }
}
