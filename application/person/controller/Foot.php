<?php

namespace app\person\controller;
use think\Controller;

class Foot extends Controller
{
    public function index()
    {
        return $this->fetch('foot');
    }
}
