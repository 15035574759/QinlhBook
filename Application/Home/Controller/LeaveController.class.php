<?php
/**
 * 极客之家 高端PHP - 留言模块
 * @copyright  Copyright (c) 2016 QIN TEAM (http://www.qlh.com)
 * @license    GUN  General Public License 2.0
 * @version    Id:  Type_model.php 2016-6-12 16:36:52
 */
namespace Home\Controller;
use Think\Controller;
header('content-type:text/html;charset=utf8');
class LeaveController extends Controller {

	/**
     * 留言查询
     * @return [type] [description]
     */
        function leave()
        {
            $res=M("book_leave")->limit(10)->order("id desc")->getField("id",true);
            
            $a=implode(',',$res);
            //print_r($a);die;
            $res=M("book_leave")->where("id in($a)")->order("id asc")->select();
            //print_r($res);die;
            $this->assign("res",$res);
            $this->right();
            $this->display();
        }

    /**
     * 查询栏目文章
     * @return [type] [description]
     */
    function right()
    {
        //echo 111;die;
        $z=M("book_errasy")->join("book_errasy_fb on book_errasy.s_id=book_errasy_fb.s_id");

        $res=$z->order("id desc")->limit(6)->select();
        //print_r($res);die;

        //文章详情
      
        $recom=$z->where("id in(7,8,9,10,11)")->select();//精心推荐
    
        $new=$z->order("id desc")->limit(5)->select();//最新文章
    
        $rand=$z->order("rand()")->limit(5)->select();//随机文章

        $this->assign("recom",$recom);//精心推荐
        $this->assign("new",$new);  //最新文章
        $this->assign("rand",$rand);//随机文章
    }

        /**
         * 留言发送
         * @return [type] [description]
         */
        function leave_cha()
        {
            $nr=I("post.nr");
            //echo $nr;
            $res=M("book_leave")->add(array("name"=>游客,"nr"=>$nr,"time"=>date("Y-m-d H:i:s",time())));
            if($res)
            {
                echo "ok";
            }
            else
            {
                echo "no";
            }
        }


    /**
     * 碎言碎语
     * @return [type] [description]
     */
    function shuo()
    {

        $User = M('book_leave'); 
        $count = $User->where()->count();
        $Page = new \Think\Page($count,6);
        $show = $Page->show();
        $list = $User->where()->order("id desc")->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('res',$list);
        $this->assign('page',$show);
        $this->display(); 
    }

}
