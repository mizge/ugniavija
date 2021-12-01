<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;

class Admin
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
        if(!auth()->check() || auth()->user()->isAdmin != 1){
            abort(Response::HTTP_FORBIDDEN);
        }
        return $next($request);
    }
}
