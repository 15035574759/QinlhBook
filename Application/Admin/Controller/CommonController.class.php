<?php
/**
 * 极客之家 高端PHP - 公共控制器模块
 *
 * @copyright  Copyright (c) 2016 QIN TEAM (http://www.qlh.com)
 * @license    GUN  General Public License 2.0
 * @version    Id:  Type_model.php 2016-6-12 16:36:52
 */
namespace Admin\Controller;
use Think\Controller;
header('content-type:text/html;charset=utf8');
class CommonController extends Controller {
	///echo 111;die;

	//判断如果没有接收到cookie进行登录功能
    public function __construct(){
    	parent::__construct();
    		if(!session('name')){
    			$this->redirect('Login/login','',2,'请登陆后再访问......');
    		}

 			$topLeaveDataGet = topLeaveNews();
 			$topLeaveNum = $topLeaveDataGet['leaveNum'];//后台头部用户留言数量
 			$topLeaveData = $topLeaveDataGet['leaveData'];//后台头部留言数据
 			$commentNum = $topLeaveDataGet['commentNum'];//后台头部评论数量
 			$news = $topLeaveNum + $commentNum;
 			$this->assign("topLeaveNum",$topLeaveNum);
 			$this->assign("topLeaveData",$topLeaveData);
 			$this->assign("commentNum",$commentNum);
 			$this->assign("news",$news);
			checkAcc();
		}

} 	