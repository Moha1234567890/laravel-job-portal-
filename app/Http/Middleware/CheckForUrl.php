<?php

namespace App\Http\Middleware;

use App\User;

use Closure;

class CheckForUrl
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

        if($request->route('id') ) {
        $user = User::find($request->route('id'));





            
        if ( $user['id'] !=  auth()->user()->id) {

            return redirect('/');
         }
        }

        if($request->route('saved_id') ) {
            $user = User::find($request->route('saved_id'));






            if ( $user['id'] !=  auth()->user()->id) {
                //echo $user;

                return redirect('/');
            }
        }

         
        
      
        return $next($request);
    }
}
