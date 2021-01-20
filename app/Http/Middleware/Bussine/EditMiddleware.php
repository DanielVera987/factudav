<?php

namespace App\Http\Middleware\Bussine;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EditMiddleware
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
        if (Auth::user()->bussine_id != $request['setting']) {
            return redirect()->route('home');
        }
        return $next($request);
    }
}
