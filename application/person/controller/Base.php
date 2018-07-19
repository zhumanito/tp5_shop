<?php
namespace app\person\controller;
use think\Controller;

class Base extends Controller
{
    public function __construct(Request $request = null) 
    {
        parent::__construct($request);
        if(!session('id'))
        {
            return $this->error('请先登录！', url('home/Login/index'));
            exit;
        }
    }
}