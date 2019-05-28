<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckInvestor
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

        if (!$userRoles->contains('admin')){
            if (!$userRoles->contains('investor')){
                
                return redirect('/');
            }
        }


        return $next($request);
    }
}
