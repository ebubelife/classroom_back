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
       
       // Check if 'admin_data' exists in the session
       if (!session()->has('admin_data')) {
        // Redirect to the login page if 'admin_data' session does not exist
        return redirect('/admin/login')->with('error', 'You need to log in to access the admin dashboard.');
    }


        return $next($request);
    }
}
