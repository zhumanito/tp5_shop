<?php

namespace app\person\controller;
use think\Controller;
use think\Db;

class Address extends Controller
{
    public function index()
    {  
        
       if(request()->isPost())
       {
           $receiver = input('post.receiver');
           $phone = input('post.phone');
           $address = input('post.address');
            
           if(empty($receiver))
           {
               return $this->error('收件人不能为空!');
           }
           if(empty($phone))
           {
               return $this->error('手机号不能为空!');
           }
           if(empty($address))
           {
               return $this->error('详细地址不能为空!');
           }
          
           $data = [
               'receiver' => $receiver,
               'phone' => $phone,
               'address' => $address,
           ];

           if(DB::name('address')->insert($data))
           {
               return $this->success('新增地址成功!');
           }
           else
           {
               return $this->error('新增地址失败!');
           }
       }
       $area1 = DB::name('city')->where(array('parent_id'=>0))->select();
       $this->assign('area1', $area1);

       $address = DB::name('address')->where(array('status'=>1))->select();
       //var_dump($address);die;
       $this->assign('address',$address);

       return $this->fetch('address');
    }

    /**
     * 编辑收货地址信息
     */
    public function edit($id)
    {
        
        if(request()->isGET())
        {
            $data = DB::name('address')->where(array('id'=>$id))->find();
        }
       
        if(request()->isPOST())
        {
            $id = input('post.id');
            $receiver = input('post.receiver');
            $phone = input('post.phone');
            $address = input('post.address');

            if(empty($receiver))
            {
                return $this->error('收件人不能为空!');
            }
            if(empty($phone))
            {
                return $this->error('手机号不能为空!');
            }
            if(empty($address))
            {
                return $this->error('详细地址不能为空!');
            }

            $data = [
                'receiver' => $receiver,
                'phone' => $phone,
                'address' => $address,
            ];
            
            if(DB::name('address')->where(array('id'=>$id))->update($data))
            {
                return $this->error('修改失败!');
            }
            else
            {
                return $this->success('修改成功!');
            }
        }
        $this->assign('data',$data);
        return $this->fetch('Address/edit',array('id'=>$id));
    }

    /**
     * 删除收货地址信息
     */
    public function del($id)
    {
        if(request()->isGET())
        {
            if(DB::name('address')->where(array('id'=>$id))->delete())
            {
                return $this->success('删除成功!');
            }
            else
            {
                return $this->error('删除失败!');
            }
           
        }
    }

    public function area($id)
    {
        if(request()->isGET())
        {
            $area = DB::name('city')->where(array('parent_id'=>$id))->select();
            echo json_encode($area);
            exit;
        }
    }
}