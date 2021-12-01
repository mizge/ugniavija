<?php

namespace App\Http\Middleware;
use Illuminate\Http\Response;
use Closure;

class Director
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
        if(!auth()->check() || auth()->user()->isDirector != 1){
            abort(Response::HTTP_FORBIDDEN);
        }
        return $next($request);
    }
}
