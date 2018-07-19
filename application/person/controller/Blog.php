<?php

namespace app\person\controller;
use think\Controller;

class Blog extends Controller
{
    public function index()
    {
        return $this->fetch('blog');
    }
}
