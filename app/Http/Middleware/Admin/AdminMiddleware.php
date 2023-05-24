<?php

namespace App\Http\Middleware\Admin;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check()){
            if(Auth::user()->role_as == 1)
            {
                return $next($request);
            }
            else if(Auth::user()->role_as == 0)
            {
                return redirect('/home')->with('status','Successfully Login');
            }
            else
            {
                return redirect('/home')->with('status','You Are not authorized');
            }
        }
        else
        {
            return redirect('/login')->with('status','Please Login first');
        }
    }
}