<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\Adminmodel;
class AdminControllers extends Controller
{
	/**
	 * [login description]登陆页面
	 * @return [type] [description]
	 */
    public function login()
    {
    	return view('login.index');
    }
     /**
      * [login_do description]执行登录
      * @return [type] [description]
      */
    public function login_do()
    {
        //接收数据
        $data=request()->except('_token');
        //查询数据库
        $info=Adminmodel::where(['admin_name'=>$data['admin_name']])->first();
        if(!empty($info)){
            //判断密码是否正确
            if($info->admin_pwd==md5($data['admin_pwd']))
            {
                session(['admin_name'=>$data['admin_name'],'user_id'=>$info['user_id']]);
                return view("admin.index");
            }
        }else{
            echo ("<script>alert('账号或密码错误');location='/login/index'</script>");exit;
        }


    }
    public function index_v1(){
    	return view('admin.index_v1');
    }
}
