<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;


class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $roles)
    {
        $user_roles=explode('|',$roles);
        $existRole=in_array(Auth::guard()->user()->role,$user_roles);
        //dd($existRole);
        //2 tai same mehod a ase
        //auth('system_admin')->user()->role;
        //Auth::guard('system_admin')->user()->role;
        if(!$existRole){
            return redirect('dashboard');
        }
        return $next($request);
    }
}
