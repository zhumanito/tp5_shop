<?php

namespace app\person\controller;
use think\Controller;

class Password extends Controller
{
    public function index()
    {
        return $this->fetch('password');
    }
}
