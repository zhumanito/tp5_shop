<?php
namespace app\home\controller;
use think\Controller;
use think\Db;

class Introduction extends Controller
{
    public function index()
    {
        // if(request()->isGET())
        // {
            $id = 1;
            $data = DB::name('goods')->where(array('id'=>$id))->find();
            
        // }
        //var_dump($data['goods_name']);
        $this->assign('data',$data);
        return $this->fetch('introduction');
    }
}
