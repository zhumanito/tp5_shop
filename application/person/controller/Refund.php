<?php

namespace app\person\controller;
use think\Controller;

class Refund extends Controller
{
    public function index()
    {
        return $this->fetch('refund');
    }
}
