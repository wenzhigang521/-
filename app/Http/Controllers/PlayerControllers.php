<?php

namespace App\Http\Controllers;
use App\model\PlayerModel;
use App\model\TeamModel;
use Illuminate\Http\Request;

class PlayerControllers extends Controller
{
    /**
	 * [team description]球员视图
	 * @return [type] [description]
	 */
    public function player(Request $request){
    	$arr=TeamModel::all();	
    	return view('player.player',['arr'=>$arr]);
    }
    /**
     * [team_do description]球员执行添加
     * @return [type] [description]
     */
    public function player_do(Request $request){
    	$all=$request->all();
    	$res=PlayerModel::create($all);
         if($res){
           return redirect("player");
        }
    }
    /**
     * [team_list description]球员展示
     * @return [type] [description]
     */
    public function player_list(Request $request){
    $team_id=$request->get('team_id');
    $arr=PlayerModel::where(['team_id'=>$team_id])->get();
    return view('player.player_list',['arr'=>$arr]);
    }
}
