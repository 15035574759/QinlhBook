<?php
/**
 * 极客之家 高端PHP - 分类模块
 *
 * @copyright  Copyright (c) 2016 QIN TEAM (http://www.qlh.com)
 * @license    GUN  General Public License 2.0
 * @version    Id:  Type_model.php 2016-6-12 16:36:52
 */
namespace Admin\Controller;
use Think\Controller;
class SortController extends CommonController {
	    
        /**
         * 分类管理
         * @return [type] [description]
         */
        function sort(){
            $res=M("book_errasy_fb")->select();
            $this->assign("res",$res);
            $this->display();
        }

        /**
         * 分类添加页面
         * @return [type] [description]
         */
        function sort_add()
        {
            $this->display();
        }

        /**
         * 分类名称即点即改
         * @return [type] [description]
         */
        function getSortSave()
        {
            $name = I("get.names");
            $sort_id = I("get.sort_id");
            $res = M("book_errasy_fb")->where("s_id=".$sort_id)->save(array('s_name'=>$name));
            echo $res;
        }

       /**
        *  分类添加入库
        * @return [type] [description]
        */
        function sort_add_pro()
        {
            $data=I("post.");
            //print_r($s_name);die;
            $res=M("book_errasy_fb")->add($data);
            if($res)
            {
                $this->success("添加成功",U("Sort/sort"));
            }
            else
            {
                $this->error("添加失败");
            }
        }

        /**
         * 分类删除
         * @return [type] [description]
         */
        function sort_del()
        {
            $id=I("get.id");
            $res=M("book_errasy_fb")->where("s_id='$id'")->delete();
            if($res)
            {
                $this->success("删除成功");
            }
            else
            {
                $this->error("删除失败");
            }
        }

}