<?php

namespace App\Http\Controllers;
use App\model\Wheelmodel;
use Illuminate\Http\Request;

class WheelControllers extends Controller
{
	/**
	 * [wheel description]轮播图添加页面
	 * @return [type] [description]
	 */
    public function wheel(){
    	return view('wheel.wheel');
    }
    /**
     * [wheer_do description]轮播图添加执行页面
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function wheel_do(Request $request){
    	$all=$request->all();
   	 	//文件上传
	   	$file=$request->file('wheel_img');
	   	if(!$request->hasFile('wheel_img')){
	   		echo "没有文件上传";die;
	   	}
	   	$ext=$file->getClientOriginalExtension();//获取文件后缀名
	   	$filename=md5(uniqid()).".".$ext;//随机名称拼接后缀名
	   	$path=$file->storeAs('image',$filename);
	   	// $data=(storage_path('app')."/public/".$path);
   		$all['wheel_img']=$path;
	   	$res=Wheelmodel::create($all);
        if($res){
            return redirect('wheel_list');
        }
    }
    public function wheel_list(){
    		$arr=Wheelmodel::all();
    		return view('wheel.wheel_list',['arr'=>$arr]);
    }

     /**
     * 即点即改
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function wheelupdate(Request $request)
    {
        $data = $request->all();
        $wheel_id = $data['wheel_id'];
        $is_show = $data['is_show'];
        $res = Wheelmodel::where(['wheel_id'=>$wheel_id])->update(['is_show'=>$is_show]);
        if($res){
            return json_encode(['ret'=>'0','msg'=>"修改成功"]);
        }
    }
}
