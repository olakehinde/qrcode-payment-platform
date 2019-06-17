<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Flash;

class checkModerator
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
        if (Auth::user()->role_id > 2) {
            Flash::error("You do not have permission");
            return redirect('home');
        }
        return $next($request);
    }
}
