<?php

namespace app\person\controller;

use think\Controller;

class Email extends Controller
{
    public function index()
    {
        return $this->fetch('email');
    }
}
