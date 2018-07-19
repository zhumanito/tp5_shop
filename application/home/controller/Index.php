<?php
namespace app\home\controller;
use think\Controller;

class Index extends Controller
{
    public function index()
    {
        return $this->fetch('index');
    }
    
    public function test()
    {
        $request = request();
        //获取当前域名
        echo 'domain：'.$request->domain().'<br/>';
        //获取当前入口文件
        echo 'file：'.$request->baseFile().'<br/>';
        //获取当前url地址  不含域名
        echo 'url：'.$request->url().'<br/>';
        //获取包含域名的完整URL地址
        echo 'url with domain：'.$request->url(true).'<br/>';
        echo $request->root().'<br/>';
        echo $request->pathinfo().'<br/>';
        echo $request->ext().'<br/>';
        echo $request->header('user-agent');
        request()->user;
    }
    
    public function databaseTest()
    {
        //数据库连接
        //$config = config();
        //数据库查询
        //$res = Db::connect($config['db_config'])->query('select * from tb_admin where id=?',[1]);
        //var_dump($res);die;
        //删除功能
        $result = db('admin')->delete(5);
        var_dump($result);
    }
}
