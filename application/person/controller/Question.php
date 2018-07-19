<?php

namespace app\person\controller;
use think\Controller;

class Question extends Controller
{
    public function index()
    {
        return $this->fetch('question');
    }
}
