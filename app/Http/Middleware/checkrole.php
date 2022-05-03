<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checkrole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, string $role)
    {
        if ($role == 'admin' && auth()->user()->role->id != 1)
        {
            abort(403);
        }
        if ($role == 'professional' && auth()->user()->role->id != 2)
        {
            abort(403);
        }
        if ($role == 'normal' && auth()->user()->role->id != 3)
        {
            return redirect()->route('admin.dashboard');
        }
        return $next($request);
    }
}
