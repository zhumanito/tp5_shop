<?php

namespace app\admin\controller;
use think\Controller;

class Customer extends Controller
{
    public function index()
    {
        return $this->fetch('lst');
    }
}