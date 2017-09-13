<?php

namespace App\Http\Middleware;
use auth;
use Closure;

class AdminMiddleware
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
       if ( Auth::user() && Auth::user()->is_admin == 1 ){
            return $next($request);
        }
        abort(404);
    }
}
