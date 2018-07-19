<?php

namespace app\person\controller;
use think\Controller;

class Bonus extends Controller
{
    public function index()
    {
        return $this->fetch('bonus');
    }
}

