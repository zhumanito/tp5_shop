<?php

namespace app\home\controller;
use think\Controller;
use think\Db;

class Login extends Controller
{
    /**
     * 用户登录
     */
    public function index()
    {
        if(request()->isPost())
        {
            $phone = input("post.phone");
            $password = input("post.password");

            if(empty($phone))
            {
                return $this->error('用户名手机号不能为空!');
            }
            if(empty($password))
            {
                return $this->error('密码不能为空!');
            }

            $info = DB::name('user')->field('id,phone,username,email,password,salt')->where('email',$phone)->find();
            if(!$info)
            {
                return $this->error('用户不存在!');
            }

            if($info['password'] != md5($password.$info['salt']))
            {
                return $this->error('密码不正确!');
            }
            else
            {
                // // session('user_name',$info['username']);
                // // session('user_id',$info['id']);
                // return $this->success('登录成功!','Home/Index/index');
            }
            
            // var_dump($phone);
        }
       
        return $this->fetch('login');
    }
   
}

