<?php 
namespace app\admin\controller;
use think\Controller;
use think\Session;

class Base extends Controller
{
    protected function _initialize()
    {
        parent::_initialize();
        define('USER_ID',Session::has('user_id') ? Session::get('user_id'):null);
    }

    //判断用户是否登录系统，放在系统后台入口前面：index/index
    protected function isLogin()
    {
        if(is_null(USER_ID))
        {
            return $this-> error('用户未登录，无法访问!',url('admin/Login/login'));
        }
    }

    //防止用户重复登录，放在登录操作前面:Login/login
    protected function aleradyLogin()
    {
        if(USER_ID)
        {
            return $this->error('用户已经登录，请勿重复登录!',url('admin/Index/index'));
        }
    }
}