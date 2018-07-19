<?php

namespace app\person\controller;
use think\Controller;
use think\Db;

class Information extends Controller
{
    public function index()
    {
        if(request()->isPost())
        {
            $realname = input("post.realname");
            $nickname = input("post.nickname");
            $phone = input("post.phone");
            $email = input("post.email");
            $sex = input("post.sex");
            $birthday = input("post.birthday"); 

            $data = [
                'realname' => $realname,
                'nickname' => $nickname,
                'phone' => $phone,
                'email' => $email,
                'sex' => $sex,
                'birthday' => strtotime($birthday),
            ];

            if(empty($realname))
            {
                return $this->error('真实姓名不能为空!');
            }
            if(empty($nickname))
            {
                return $this->error('昵称不能为空!');
            }
            if(empty($phone))
            {
                return $this->error('手机号不能为空!');
            }
            if(empty($email))
            {
                return $this->error('邮箱不能为空!');
            }

            if(DB::name('user')->where('id',2)->update($data))
            {
                return $this->success('修改成功!');
            }
            else
            {
                return $this->error('修改失败!');
            }

            
        }
        return $this->fetch('information');
    }
}
