<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use MercurySeries\Flashy\Flashy as FlashyFlashy;

class CheckStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->user()->State == 0){
            FlashyFlashy::error('Your account is blocked, please contact your admin');
            auth()->logout();
            return back();
        }
        return $next($request);
    }
}
