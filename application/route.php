<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\Route;


// 首页
Route::get('/','index/Index/index');
// search 搜索
Route::get("search",'index/Index/Search');
// top250
Route::get('top250','index/Index/top250');
// info 影片信息
Route::get("info",'index/Index/IdInfo');
// review 影片评论
Route::get("review", "index/Index/IdReviews");

// 名人介绍
Route::get("celebrity",'index/Index/Get_celebrity');
// tag
Route::get("tag",'index/Index/Get_tag');
// 艺人搜索
Route::get("people",'index/Index/People');
// 高分电影
Route::get("movie",'index/Index/Movie');
// 热门电影
Route::get("tv",'index/Index/Tv');


//return [
//    '__pattern__' => [
//        'name' => '\w+',
//    ],
//    '[hello]'     => [
//        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
//        ':name' => ['index/hello', ['method' => 'post']],
//    ],
//
//];
