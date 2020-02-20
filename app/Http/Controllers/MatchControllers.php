<?php

namespace App\Http\Controllers;
use App\model\MatchModel;
use App\model\TeamModel;

use Illuminate\Http\Request;

class MatchControllers extends Controller
{
     /**
	 * [team description]比赛管理视图
	 * @return [type] [description]
	 */
    public function match(){
    	$arr=TeamModel::all();	
    	return view('match.match',['arr'=>$arr]);
    }
    /**
     * [team_do description]比赛管理执行添加
     * @return [type] [description]
     */
    public function match_do(Request $request){
    	$all=$request->all();
    	MatchModel::create($all);
    }
    /**
     * [team_list description]比赛管理展示
     * @return [type] [description]
     */
    public function match_list(){
        //自己查自己
        $arr=MatchModel::select('match.match_id','start_time','ta.team_name as ta_name','tb.team_name as tb_name')
        ->join('team as ta','match.team_one',"=",'ta.team_id')
        ->join('team as tb','match.team_two',"=",'tb.team_id')
        ->get();
    	return view('match.match_list',['arr'=>$arr]);
    }
}
