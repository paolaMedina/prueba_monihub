<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PermissionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $permission)
    {


        if (!Auth::guard('api')->check()) {
            abort(401);
        }
        if (!$request->user('api')->can($permission)) {
            abort(403);
        }
        return $next($request);
    }
}
