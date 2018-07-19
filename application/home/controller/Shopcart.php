<?php
namespace app\home\controller;
use think\Controller;

class Shopcart extends Controller
{
    public function index()
    {
        return $this->fetch('shopcart');
    }
}

