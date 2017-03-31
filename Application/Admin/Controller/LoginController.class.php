<?php
/**
 * 极客之家 高端PHP - 用户登录模块
 *
 * @copyright  Copyright (c) 2016 QIN TEAM (http://www.qlh.com)
 * @license    GUN  General Public License 2.0
 * @version    Id:  Type_model.php 2016-6-12 16:36:52
 */
namespace Admin\Controller;
use Think\Controller;
header('content-type:text/html;charset=utf8');
class LoginController extends Controller {

    /**
     * 用户登录入口
     * @return [type] [description]
     */
    public function login()
    {
    	$this->display();
    }

   /**
    * 退出登录
    * @return [type] [description]
    */
    function tuichu()
    {
    	session(null);
    	$this->success("退出成功",U("Login/login"));
    }

    /**
     * 用户登录 
     * @return [type] [description]
     */
    function user_login()
    {

    	$username=I("post.username");
    	$password=md5(I("post.password"));

    	$res=M("book_login")->where("username='$username'")->find();

    	if($res)
        {

    		if($res['password']==$password)
            {

                //查询当前管理员权限
                $list=$this->getAccess($res['id']);//调用方法

                session("ACC",$list);

    			session("id",$res['id']);
    			session("name",$res['username']);

                $this->redirect('Index/index');

    		}
            else
            {

    			$this->error("密码输入错误");
    		}

    	}
        else
        {

    		$this->error("用户名不存在");
    	}

    }

    /**
     * 密码修改
     * @return [type] [description]
     */
    function password_save()
    {
        if(I("post."))
        {
            $data = I("post.");
            $data['password'] = md5(I("post.password"));
            // print_r($data);die;
            $user_id = session('id');
            $res = M("book_login")->where("id='$user_id'")->save($data);
            if($res)
            {
                $this->success("修改成功",U("Index/index"));
            }
            else
            {
                $this->error("修改失败");
            }
        }
        else
        {
            $user_id = session('id');
            $res=M("book_login")->where("id='$user_id'")->find();
            $this->assign("arr",$res);
            $this->display();
        }
       
    }

    /**
     * 权限查询
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    function getAccess($id)
    {
        $res=M("book_login_role")->where("r_id='$id'")->getField("role_id",true);
        //print_r($res);die;
        $re=implode(',',$res);
        //print_r($re);die;
        $ress=M("book_role_node")->join("book_node on book_role_node.node_id=book_node.node_id")->where("role_id in($re)")->select();
        //print_r($ress);die;
        return $ress;
    }

    

}