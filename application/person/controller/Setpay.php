<?php

namespace app\person\controller;
use think\Controller;

class Setpay extends Controller
{
    public function index()
    {
        return $this->fetch('setpay');
    }
}
