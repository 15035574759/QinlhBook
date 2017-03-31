<?php
/**
 * 极客之家 高端PHP - 日记模块
 *
 * @copyright  Copyright (c) 2016 QIN TEAM (http://www.qlh.com)
 * @license    GUN  General Public License 2.0
 * @version    Id:  Type_model.php 2016-6-12 16:36:52
 */
namespace Home\Controller;
use Think\Controller;
header('content-type:text/html;charset=utf8');
class DiaryController extends Controller {
	
    /**
     * 个人日记
     * @return [type] [description]
     */
    function diary()
    {
        $User = M('book_shuoshuo'); 
        $p=isset($_GET["p"]) ? $_GET['p']: 1;
        $list = $User->where()->order("id desc")->page($p.',5')->select();


        $count = $User->where()->count();
        $Page = new \Think\Page($count,5);
        $show = $Page->show();

        $this->assign('res',$list);
        $this->assign('page',$show);
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

        ///* 文章推荐 */      
        $recom=$z->where("id in(7,8,9,10,11)")->select();//精心推荐
    
        $new=$z->order("id desc")->limit(5)->select();//最新文章
    
        $rand=$z->order("rand()")->limit(5)->select();//随机文章

        $this->assign("recom",$recom);//精心推荐
        $this->assign("new",$new);  //最新文章
        $this->assign("rand",$rand);//随机文章
    }
}