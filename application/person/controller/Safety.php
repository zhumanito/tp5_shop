<?php

namespace app\person\controller;
use think\Controller;

class Safety extends Controller
{
    public function index()
    {
        return $this->fetch('safety');
    }
}
