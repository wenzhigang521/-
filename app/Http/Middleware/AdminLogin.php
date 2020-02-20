<?php

namespace App\Http\Middleware;

use Closure;

class AdminLogin
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
        // $name=session('name');
        // if(!$name){
        //     echo "<script>alert('请先登陆!');location='/login/index'</script>";
        // }
        return $next($request);
    }
}
