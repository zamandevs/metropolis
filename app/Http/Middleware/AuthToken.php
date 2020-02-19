<?php

namespace App\Http\Middleware;

use Closure;

class AuthToken
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

        if($request->header('token')==env('AUTH_TOKEN','o3FXcO3o542IYVdb8zzG6o0NaFtDNJ'))
            return $next($request);

    }
}
