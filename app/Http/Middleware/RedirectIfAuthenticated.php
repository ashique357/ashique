<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    // public function handle($request, Closure $next, $guard = null)
    // {
    //     if (Auth::guard($guard)->check()) {
    //         return redirect('/home');
    //     }
    //
    //     return $next($request);
    // }

    public function handle($request, Closure $next,$guard = null)
    {
      $guard=Auth::guard();

      if ($guard=='admin') {
        return redirect()->route('admin.dashboard');
      }
      if ($guard=='SuperAdmin') {
        return redirect()->route('SuperAdmin.dashboard');
      }
      if ($guard=='web') {
        return redirect()->route('home');
      }

      return $next($request);
      }

    }
