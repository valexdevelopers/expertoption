<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;

class UserForceUpgrade
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::user()->status === 'upgrade'){
            return redirect()->route('purchase.create')->with('message', 'You need to upgrade your account')->with('message-color', 'alert-secondary');
        }
        return $next($request);
    }
}
