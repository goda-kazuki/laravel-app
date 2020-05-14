<?php

namespace App\Http\Middleware;

use Closure;

class HelloMiddleware
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
        $hello="こんにちはみどるうぇあ";
        $bye="さよならみどるうぇあ";

        $data=[
            "hello"=>$hello,
            "bye"=>$bye
        ];

        $request->merge($data);
        return $next($request);
    }
}
