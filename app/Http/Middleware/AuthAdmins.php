<?php

namespace App\Http\Middleware;
use Request;


use Closure;

class AuthAdmins
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */




        public function handle($request, Closure $next)
        {
                if (! $request->expectsJson()) {
                    return $next($request);
                }









       }

}
