<?php
/**
 * 极客之家 高端PHP - 评论模块
 *
 * @copyright  Copyright (c) 2016 QIN TEAM (http://www.qlh.com)
 * @license    GUN  General Public License 2.0
 * @version    Id:  Type_model.php 2016-6-12 16:36:52
 */
namespace Admin\Controller;
use Think\Controller;
class CommentController extends CommonController {
	    
        /**
         * 文章评论
         * @return [type] [description]
         */
        function comment()
        {

            $bt=I("get.bt");//接收搜索值

            $User = M('book_errasy'); // 实例化User对象// 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
            $p=isset($_GET["p"]) ? $_GET['p']: 1;
            $list = $User->where("bt like '%$bt%'")->order()->page($p.',5')->join("book_errasy_fb on book_errasy.s_id=book_errasy_fb.s_id")->select();
            // $res = $User->join("book_comment on book_errasy.id=book_comment.s_id")->select();

            $count = $User->where("bt like '%$bt%'")->count();
            $Page = new \Think\Page($count,5);
            $show = $Page->show();

            $this->assign('res',$list);
            $this->assign('page',$show);
            $this->display();
        }

        /**
         * 评论查看
         * @return [type] [description]
         */
        function comment_show()
        {
            $id=I("get.id");
            //print_r($id);die;
            $res=M("book_comment")->join("book_errasy on book_comment.h_id=book_errasy.id")->where("h_id='$id'")->select();
           foreach ($res as $v) 
           {
               $bt=$v['bt'];
           }
            $ress=M("book_comment")->where("h_id='$id'")->limit(10)->select();
             // print_r($ress);die;
                $this->assign("bt",$bt);
                $this->assign("res",$ress);
                $this->display();
            }
}