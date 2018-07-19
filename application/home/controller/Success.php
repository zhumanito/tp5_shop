<?php
namespace app\home\controller;
use think\Controller;

class Success extends Base
{
    public function index()
    {
        return $this->fetch('success');
    }
}

