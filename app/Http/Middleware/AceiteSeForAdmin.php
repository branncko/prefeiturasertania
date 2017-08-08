<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AceiteSeForAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = 'admin_user')
    {
        if (Auth::guard($guard)->check()) {
            return redirect('/admin');
        }
        return $next($request);
    }
}
