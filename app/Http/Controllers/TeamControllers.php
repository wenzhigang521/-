<?php

namespace App\Http\Controllers;
use App\model\TeamModel;
use Illuminate\Http\Request;

class TeamControllers extends Controller
{	
	/**
	 * [team description]球队视图
	 * @return [type] [description]
	 */
    public function team(){

    	return view('team.team');
    }
    /**
     * [team_do description]球队执行添加
     * @return [type] [description]
     */
    public function team_do(Request $request){
    	$all=$request->all();
    	$res=TeamModel::create($all);
         if($res){
            return redirect('team_list');
        }
    }
    /**
     * [team_list description]球队展示
     * @return [type] [description]
     */
    public function team_list(){
    	$arr=TeamModel::all();
    	return view('team.team_list',['arr'=>$arr]);
    }
}
