<?php

namespace App\Http\Controllers;
use App\model\DataModel;
use App\model\MatchModel;
use App\model\PlayerModel;
use Illuminate\Http\Request;

class DataControllers extends Controller
{
   public function data1(Request $request){
   	 $arr=MatchModel::select('match_id','ta.team_name as ta_name','tb.team_name as tb_name')
        ->join('team as ta','match.team_one',"=",'ta.team_id')
        ->join('team as tb','match.team_two',"=",'tb.team_id')
        ->get();
     $data=PlayerModel::get();
     	return view('data.data',['arr'=>$arr,'data'=>$data]);
       	
  	
   }
   public function data(Request $request){
   	$arr=$request->all();
   	DataModel::create($arr);
   	return redirect('data1');
   }
  
}
