<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckAdmin
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
        $userRoles = Auth::user()->roles->pluck('name');
        //dd($userRoles);
        if (!$userRoles->contains('admin')){
            if (!$userRoles->contains('investor')){
                return redirect('/startup');
            }else{
                if (!$userRoles->contains('startup')){
                    return redirect('/investor');
                }
            }
        }
        return $next($request);
    }
}
