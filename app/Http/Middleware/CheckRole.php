<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        // Check if user is logged in
        if (!Auth::check()) {
            return redirect('/login');
        }

        // Check if user has the required role
        $user = Auth::user();
        if ($user->role !== $role) {
            abort(403, 'Unauthorized access.');
        }

        // If everything is good, continue to the page
        return $next($request);
    }
}