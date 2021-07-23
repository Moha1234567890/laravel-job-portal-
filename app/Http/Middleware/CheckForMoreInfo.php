<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use App\User;

use Closure;

class CheckForMoreInfo
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


        if($request->url('user/more-info') ) {
           // $user = ($request->route('more-info'));
          if(!$user->user_desc == Null OR !$user->type == Null) {
            return redirect()->route('home');

          }

          




        } 

      

         
        
      
        return $next($request);
    }
}
