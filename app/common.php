<?php
// 应用公共文件

function miss($msg = '很抱歉，你访问的页面找不到了'){
	return view('../view/public/404.html', compact('msg'));
}
