<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class ManageMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        if ( Auth::user()->check_type( 'developer') ) {
            return $next($request);
        }
        return redirect('forbidden');
    }
}
