<?php

namespace App\Http\Middleware;

use Closure;
use Response;

class CandidateMiddleware
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
        if ($request->user() && $request->user()->role->role != 'candidate')
        {
         abort(403);
        }
        return $next($request);
    }
}
