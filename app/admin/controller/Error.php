<?php
namespace app\admin\controller;

class Error
{
    public function __call($name, $arguments)
    {
        return miss('控制器不存在');
    }
}
