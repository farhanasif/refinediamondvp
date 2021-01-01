<?php

namespace App\Http\Middleware;

use Closure;

class UserPermissionMiddleware
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
        $auth_user_permissions = auth()->user()->permissions
            ->pluck('name')->toArray();
        $hasPermission = in_array($permission,$auth_user_permissions);
        //dd($hasPermission);
        if(!$hasPermission){
            abort(401);
            //return redirect('/admin/dashboard');
        }
        return $next($request);
    }
}
