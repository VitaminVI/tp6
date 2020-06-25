<?php
declare (strict_types=1);

namespace cc\middleware;

use Closure;
use think\App;
use think\Request;
use think\Response;

/**
 * 登录验证
 */
class Login
{
    /** @var App */
    protected $app;

    public function __construct(App $app)
    {
        $this->app = $app;
    }

    /**
     * 登录验证
     * @access public
     * @param Request $request
     * @param Closure $next
     * @return Response
     */
    public function handle($request, Closure $next)
    {
        //用户类型
        $scopes = 'admin';
        //是否已登录
        $hasLogin = true;

        //TODO 未登录则跳转到登录页
        if (!$hasLogin) {
            if ($request->isAjax()) return json();
            else {
                //TODO 根据不同scopes判断未登录时要跳转的页面
                if($scopes == 'admin') return redirect('/admin/login');
                else return redirect('/');
            }
        }

        return $next($request);
    }

    public function end(Response $response)
    {
        // 回调行为
    }
}
