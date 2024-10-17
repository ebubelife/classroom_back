<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        // Replace this with your custom authentication logic
        if (!Auth::check() || Auth::user()->role !== 'admin') {
            return redirect('/admin/login')->with('error', 'You are not authorized to access this page.');
        }

        return $next($request);
    }
}
