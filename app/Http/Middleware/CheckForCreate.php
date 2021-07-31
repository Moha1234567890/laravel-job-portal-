<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;
use App\User;

class CheckForCreate
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

        $user = User::findOrFail(Auth::user()->id);


        if($request->url('job/create') ) {
            
           if($user->type !== 'Company') {
             return redirect()->route('home');
  
           }
         } 
        return $next($request);
    }
}
