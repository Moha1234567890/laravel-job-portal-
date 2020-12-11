<?php

namespace App\Http\Middleware;

use Closure;

class StopAccessLoad
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

        if($request->route('id')) {
            return redirect('/');

        }
        return $next($request);
    }
}
