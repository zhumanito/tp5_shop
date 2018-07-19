<?php

namespace app\person\controller;
use think\Controller;

class Bindphone extends Controller
{
    public function index()
    {
        return $this->fetch('bindphone');
    }
}

