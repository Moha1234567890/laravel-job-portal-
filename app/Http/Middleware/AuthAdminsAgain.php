<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Request;
use Closure;
use App\Providers\RouteServiceProvider;
class AuthAdminsAgain
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {

        if (Auth::guard($guard)->check()) {
            if ($guard == 'admin')
                return redirect(RouteServiceProvider::ADMIN);
            else
                return redirect(RouteServiceProvider::HOME);
        }
    }
}
