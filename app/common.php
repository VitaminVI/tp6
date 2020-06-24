<?php
// 应用公共文件

function miss($msg = '很抱歉，你访问的页面找不到了'){
    $data = [
        'code' => '1',
        'msg' => 'error',
        'data' => [],
    ];
    if(request()->isAjax()) return \think\response\Json::create($data, 'JSON');
	else return view('../view/public/404.html', compact('msg'));
}
