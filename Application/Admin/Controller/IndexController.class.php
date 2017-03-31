<?php
/**
 * 极客之家 高端PHP - 首页
 *
 * @copyright  Copyright (c) 2016 QIN TEAM (http://www.qlh.com)
 * @license    GUN  General Public License 2.0
 * @version    Id:  Type_model.php 2016-6-12 16:36:52
 */
namespace Admin\Controller;
use Think\Controller;
class IndexController extends CommonController {
    /*
    	进入首页
     */
    function index()
    {
    	$name=session("name");
    	$this->assign("name",$name);
    	$this->display();
    }

    /**
     * 头部消息
     * @return [type] [description]
     */
    function topLeaveNews()
    {
        $res = M("book_leave")->where("state=0")->count()->select();
        echo $res;
    }
    
  }