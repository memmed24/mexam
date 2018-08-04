<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ManagerMiddleware
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
        $user = Auth::user()->whereHas('groups', function ($query){
            $query->where('name', '=', 'editor');
        })->get();
        if(!$user->isEmpty())
        {
            return $next($request);
        }
        return Redirect::to('home');
    }
}
