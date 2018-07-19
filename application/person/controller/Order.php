<?php

namespace app\person\controller;
use think\Controller;

class Order extends Controller
{
    public function index()
    {
        return $this->fetch('order');
    }
    
    /**
     * 订单详细信息
     */
    public function orderinfo()
    {
        return $this->fetch('orderinfo');
    }
}
