<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AuthBasic
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //echo Auth::onceBasic()."dsad";
        if(Auth::onceBasic()){
            return response()->json(["message" => "Authentication failed"], 401);
        } else{
            return $next($request);
        }
    }
}
