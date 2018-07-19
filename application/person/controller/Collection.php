<?php

namespace app\person\controller;
use think\Controller;

class Collection extends Controller
{
    public function index()
    {
        return $this->fetch('collection');
    }
    
    
}
