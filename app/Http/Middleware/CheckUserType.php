<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckUserType
{
    public function handle(Request $request, Closure $next, $type)
    {
        if (auth()->check() && auth()->user()->user_type == $type) {
            return $next($request);
        }
        return redirect('/Login');
    }
}
