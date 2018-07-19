<?php

namespace app\person\controller;
use think\Controller;

class Idcard extends Controller
{
    public function index()
    {
        return $this->fetch('idcard');
    }
}
