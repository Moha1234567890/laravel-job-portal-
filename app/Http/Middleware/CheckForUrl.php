<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

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

        // if($request->route('id') ) {
        // $user = User::find($request->route('id'));



        //     if(isset($user['id'])) {
        //         if ( $user['id'] !=  auth()->user()->id) {

        //             return redirect()->route('profile', ['id' => Auth::user()->id]);

        //         }
        //     }else {
        //         return abort('404');

        //     }



        // }

        // if($request->route('saved_id') ) {
        //     $user = User::find($request->route('saved_id'));



        //     if(isset($user['id'])) {
        //         if ( $user['id'] !=  auth()->user()->id) {
        //             //echo $user;

        //             return redirect()->route('saved.jobs', ['saved_id' => Auth::user()->id]);

        //         }
        //     }else {
        //         return abort('404');

        //     }



        // }

         
        
      
        return $next($request);
    }
}
