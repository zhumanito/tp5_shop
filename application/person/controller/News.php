<?php

namespace app\person\controller;
use think\Controller;

class News extends Controller
{
    public function index()
    {
        return $this->fetch('news');
    }
}
