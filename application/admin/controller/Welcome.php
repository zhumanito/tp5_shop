<?php
/**
 *  
 * @file   Welcome.php  
 * @date   2018-7-19
 * @author zhu  
 */
namespace app\admin\controller;
use think\Controller;

class Welcome extends Base
{
    public function index()
    {
        $this->isLogin();
        return $this->fetch('welcome');
    }
}

