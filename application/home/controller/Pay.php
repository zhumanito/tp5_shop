<?php
namespace app\home\controller;
use think\Controller;

class Pay extends Controller
{
    public function index()
    {
        return $this->fetch('pay');
    }
}
