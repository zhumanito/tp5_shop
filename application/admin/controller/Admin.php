<?php
/**
 *  
 * @file   Admin.php  
 * @date   2018-7-19
 * @author zhu  
 */
namespace app\admin\controller;
use think\Controller;

class Admin extends Base
{
    public function __construct(\think\Request $request = null) {
        parent::__construct($request);
        $this->isLogin();
    }
    
    /*
     * 角色管理模块
     */
    public function admin_role()
    {
        return $this->fetch();
    }
    
    /*
     * 角色管理添加
     */
    public function admin_role_add()
    {
        return $this->fetch();
    }
    
    /*
     * 权限管理模块
     */
    public function admin_permission()
    {
        return $this->fetch(); 
    }
    
    /*
     * 管理员列表模块
     */
    public function admin_list()
    {
        return $this->fetch();
    }
    
    /**
     * 管理员添加
     */
    public function admin_add()
    {
        return $this->fetch();
    }
}

