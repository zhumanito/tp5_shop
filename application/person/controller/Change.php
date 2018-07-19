<?php

namespace app\person\controller;
use think\Controller;

class Change extends Controller
{
    public function index()
    {
        return $this->fetch('change');
    }
}
