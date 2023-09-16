<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
// use Illumiinate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if(!Auth::user()->role_as == '1'){
            return redirect('/')->with('status','Acess Denied. As you are not Admin');
        }
        return $next($request);
    }
}
