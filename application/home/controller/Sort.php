<?php
namespace app\home\controller;
use think\Controller;

class Sort extends Controller
{
    public function index()
    {
        return $this->fetch('sort');
    }
}

