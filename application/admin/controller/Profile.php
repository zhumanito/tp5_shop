<?php 
namespace app\admin\controller;
use think\Controller;

class Profile extends Base
{
    public function index()
    {
        $this->isLogin();
        return $this->fetch('profile');
    }
}