<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // Only redirect if the user is not authenticated or not an admin
        if (!auth()->check() || !auth()->user()->isAdmin()) {
            // Avoid redirect loop by checking if the current route is not the dashboard
            if ($request->routeIs('dashboard')) {
                return $next($request);  // Allow access to dashboard without redirect
            }

            return redirect()->route('dashboard');  // Redirect to user dashboard
        }

        return $next($request);  // Allow admin to proceed
    }
}
