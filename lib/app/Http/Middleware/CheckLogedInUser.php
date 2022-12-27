<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
class CheckLogedInUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()&&Auth::user()->quyen == 0 &&Auth::user()->active==1) {
            return redirect()->route('trang-chu');
               
           
        }else
            return $next($request);
    }
}
