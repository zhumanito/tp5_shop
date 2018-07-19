<?php

namespace app\person\controller;
use think\Controller;

class Bill extends Controller
{
    /**
     * 个人账单
     */
    public function index()
    {
        return $this->fetch('bill');
    }
    
    /**
     * 账单明细
     */
    public function bill_list()
    {
        return $this->fetch('billlist');
    }
}
