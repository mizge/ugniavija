<?php

namespace App\Http\Middleware;
use Illuminate\Http\Response;
use Closure;

class User
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
        if(!auth()->check() || auth()->user()->isAdmin != 0 || auth()->user()->isDirector != 0){
            abort(Response::HTTP_FORBIDDEN);
        }
        return $next($request);

    }
}
