<?php

namespace App\Http\Middleware;

use Closure;

class VerifySession
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
        if($request->session()->has('userid')){
            return $next($request);
        }
        elseif($request->session()->has('parentid')){
            return $next($request);
        }
        elseif($request->session()->has('teacherid')){
            return $next($request);
        }
        elseif($request->session()->has('adminid')){
            return $next($request);
        }
        else{
            return redirect()->route('login');
        }
    }
}
