<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class UserMiddleware
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
        //we will add do next with the user ....

        if(!Auth::check() || Auth::user()->hasARole('user')) {

            return redirect()->route('/home');
        }

        return $next($request);
    }
}
