<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
//登陆
Route::any('/','AdminControllers@Login');
//后台首页
Route::any('admin/login_do','AdminControllers@login_do');
Route::any('/admin/index_v1','AdminControllers@index_v1');
//轮播图
Route::any('wheel','WheelControllers@wheel');
Route::any('wheel_do','WheelControllers@wheel_do');
Route::any('wheel_list','WheelControllers@wheel_list');
Route::any('wheelupdate','WheelControllers@wheelupdate');

//球队
Route::any('team','TeamControllers@team');
Route::any('team_do','TeamControllers@team_do');
Route::any('team_list','TeamControllers@team_list');
//球员
Route::any('player','PlayerControllers@player');
Route::any('player_do','PlayerControllers@player_do');
Route::any('player_list','PlayerControllers@player_list');
//比赛管理
Route::any('match','MatchControllers@match');
Route::any('match_do','MatchControllers@match_do');
Route::any('match_list','MatchControllers@match_list');
//球员比赛数据录入添加
Route::any('data1','DataControllers@data1');
Route::any('data','DataControllers@data');
Route::any('data_list','DataControllers@data_list');