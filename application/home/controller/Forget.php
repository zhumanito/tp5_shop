<?php

namespace app\home\controller;
use think\Controller;

class Forget extends Controller{
    public function index()
    {
        if(request()->isPost())
        {
            $phone = input('post.phone');
            $code = input('post.code');
            $password = input('post.password');
            $confirmpassword = input('post.passwordRepeat');

            if(empty($phone))
            {
                return $this->error('手机号不能为空!');
            }
            if(empty($code))
            {
                return $this->error('验证码不能为空!');
            }
            if(empty($password))
            {
                return $this->error('密码不能为空!');
            }
            if(empty($confirmpassword))
            {
                return $this->error('确认密码不能为空!');
            }

            if($password !== $confirmpassword)
            {
                return $this->error('两次输入的密码不一致，请重新输入!');
            }
            
        }
        return $this->fetch('forget');
    }
}