<?php

namespace app\home\controller;
use think\Controller;
use think\Db;

class Register extends Controller
{
    /**
     * 用户注册
     */
    public function index()
    {
        //用户注册判断提交方式
        if(request()->isPOST())
        {
            $email = input("post.email");
            $password = input("post.password");
            $passwordRepeat = input("post.passwordRepeat");
            $salt = time();
            $ip = request()->ip();
            

            $data = [
                'email' => $email,
                'password' => md5($password.$salt),
                'salt' => $salt,
                'ip' => $ip,
                'created' => time(),
            ];

            if(empty($email))
            {
                return $this->error('邮箱账号不能为空');
            }
            if(empty($password))
            {
                return $this->error('密码不能为空!');
            }
            if(empty($passwordRepeat))
            {
                return $this->error('确认密码不能为空!');
            }

            if($password !== $passwordRepeat)
            {
                return $this->error('两次输入的密码不一致,请重新输入!');
            }
            
            $checkmail="/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/";//定义正则表达式  
            if(!empty($email)){                                         //判断文本框中是否有值                     
                if(preg_match($checkmail,$email)){                       //用正则表达式函数进行判断  
                    //return $this->success("电子邮箱格式正确!");  
                }
                else
                {  
                    return $this->error("电子邮箱格式不正确!");  
                }  
            } 
            

            if(DB::name('user')->where('email',$email)->find())
            {
                return $this->error('该邮箱已被注册!');
            }

            if(DB::name('user')->insert($data))
            {
                return $this->success('注册成功!','Login/index');
            }
            else
            {
                return $this->error('注册失败!');
            }
           
           
        }
        return $this->fetch('register');
    }

    

   
}

