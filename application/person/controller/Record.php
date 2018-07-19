<?php

namespace app\person\controller;
use think\Controller;

class Record extends Controller
{
    public function index()
    {
        return $this->fetch('record');
    }
}
