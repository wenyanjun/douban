<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
function json_success($data, $count = 1){
    $obj['code'] = 200;
    $obj['data'] = $data;
    $obj['msg'] = '请求成功';
    if (empty($data)){
        $obj['msg'] = '这已经是我的底线了';
    }
    $obj['coder'] = '简书关注coderYJ 欢迎加QQ群讨论277030213';
    return json_encode($obj);
}