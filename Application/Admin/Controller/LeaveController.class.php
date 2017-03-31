<?php
/**
 * 极客之家 高端PHP - 用户留言模块
 *
 * @copyright  Copyright (c) 2016 QIN TEAM (http://www.qlh.com)
 * @license    GUN  General Public License 2.0
 * @version    Id:  Type_model.php 2016-6-12 16:36:52
 */
namespace Admin\Controller;
use Think\Controller;
class LeaveController extends CommonController {

        /**
         * 留言展示
         * @return [type] [description]
         */
        function leave()
        {
            $name=session("name");
            $res=M("book_leave")->where("name!='$name' and state='0'")->order("id desc")->select();
            // print_r($res);die;
            $this->assign("res",$res);
            $this->display();
        }

        /**
         * 留言查看内容
         * @return [type] [description]
         */
        function leave_show()
        {
            $id=I("get.id");
            $res=M("book_leave")->where("id='$id'")->find();
             M("book_leave")->where("id='$id'")->save(array("state"=>1));
            //print_r($res);die;
            $this->assign("res",$res);
            $this->display();
        }

        /**
         * 留言回复页面
         * @return [type] [description]
         */
        function leave_hf(){
            $name=session("name");
            $this->assign("name",$name);
            $this->display();
        }

        /**
         * 留言回复入库
         * @return [type] [description]
         */
        function leave_hf_pro()
        {
            $data=I("post.");
            $data['nr']=I('post.nr','','stripslashes');
            //print_r($nr);die;
            $data['time']=date("Y-m-d H:i:s",time());
            $res=M("book_leave")->add($data);
            M("book_leave")->where("id='$res'")->save(array("state"=>2));
            if($res)
            {
                $this->success("回复成功",U("Leave/leave"));
            }
            else
            {
                $this->error("回复失败");
            }
        }  

}