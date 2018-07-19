<?php

namespace app\person\controller;
use think\Controller;

class Comment extends Controller
{
    public function index()
    {
        return $this->fetch('comment');
    }
    
    public function commentLst()
    {
        return $this->fetch('commentlist');
    }
}

