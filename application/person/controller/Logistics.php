<?php

namespace app\person\controller;
use think\Controller;

class Logistics extends Controller
{
    public function index()
    {
        return $this->fetch('logistics');
    }
}
