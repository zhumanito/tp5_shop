<?php
namespace app\home\controller;
use think\Controller;

class Search extends Controller
{
    public function index()
    {
        return $this->fetch('search');
    }
}
