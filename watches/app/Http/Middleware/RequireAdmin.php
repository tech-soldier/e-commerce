<?php

namespace App\Http\Middleware;
use \Auth;

use Closure;

class RequireAdmin
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
        if(Auth::user()->is_admin){
            return $next($request);
        }

        return redirect('')->with('error', 'You are not authorized to view the resource');
    }
}
