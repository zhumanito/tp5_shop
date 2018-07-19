<?php

namespace app\person\controller;

use think\Controller;

class Coupon  extends Controller
{
    public function index()
    {
        return $this->fetch('coupon');
    }
}
