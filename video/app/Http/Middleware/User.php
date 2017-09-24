<?php

namespace App\Http\Middleware;

use Closure;

class User
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
        //如果用户没有登录
        if(!session('user')){
            return redirect('home/login')->with(['info'=>'请先登录']);
        }
        return $next($request);
    }
}
