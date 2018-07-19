<?php 
namespace app\admin\controller;
use think\Controller;
use think\Db;

class Login extends Base
{
    /**
     * 用户登录
     */
    public function login()
    {
        $this->aleradyLogin();
        if(request()->isPOST())
        {
            $phone = input("post.username");
            $password = input("post.password");

            if(empty($phone))
            {
                return $this->error('用户名不能为空!');
            }
            if(empty($password))
            {
                return $this->error('密码不能为空!');
            }

            $info = DB::name('admin')->field('id,username,password,salt')->where('username',$phone)->find();
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
                session('user_name',$info['username']);
                session('user_id',$info['id']);
                return $this->success('登录成功!');
            }
            
        }
        return $this->fetch();
    }

    public function layout()
    {
        session(null);
        return $this->success('注销登录，正在返回!',url('Login/login'));
    }
}