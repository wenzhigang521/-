<?php

namespace App\Http\Middleware;
use App\appmodel\AdminUsermodel;
use Closure;

class CheckToken
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
        //要求用户 传token
        $token=$request->input("token");
        if(!$token){
            die(json_encode(['code'=>201,'msg'=>'token不能为空']));
        }  
        //效验token (根据token查询数据库)
        $userData=AdminUsermodel::where(['token'=>$token])->first();
        if(!$userData){
            die(json_encode(['code'=>202,'msg'=>'token错误']));
        }
        // 判断过期时间
        if(time()>$userData['expire_time']){
            die(json_encode(['code'=>203,'msg'=>'token过期']));
        }
        // 更新一下过期时间
        $userData->expire_time=time()+7200;
        $userData->save();
        $mid_params = ['mid_params'=>'this is mid_params'];
        $request->attributes->add($mid_params);//添加参数
       $request['userData']=$userData;
        return $next($request);
    }
    
}
