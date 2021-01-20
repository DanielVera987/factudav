<?php

namespace App\Http\Middleware\Bussine;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BussineMiddleware
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
        $user = Auth::user();
        if ($user->bussine_id == null) {
            return redirect(route('settings.create'));
        }
        return $next($request);
    }
}
