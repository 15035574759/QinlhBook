<?php
header('content-type:text/html;charset=utf8');
/**
 * 验证用户是否有权限
 */
function checkAcc(){

	$controller = CONTROLLER_NAME;
	$action = ACTION_NAME;


	//基本默认页控制不检测
	
	if(in_array($controller, C('PUBLIC_CONTROLLER'))){
		return;
	}
	
	//超级管理员设置最高权限
	
	$super_user = session("name");
	
		if($super_user == C('SUPER_ADMIN')){
			return;
	}

	
	$acc_list = session("ACC");
	//dump($acc_list);
	$sign=0;//没有权限
	foreach ($acc_list as $key => $val) {

		if($val['controller'] == $controller && $val['action'] == $action){

			$sign = 1;
		}
	}
	if($sign==0){

		echo "没有权限";die;
	}

}
	    /**
		 * 用户留言 
		 * @return [type] [description]
		 */
		function topLeaveNews()
		{
			$leaveNum = M("book_leave")->where("state=0")->count();//用户留言数量
			$leaveData = M("book_leave")->where("state=0")->order("id desc")->limit(6)->select();//用户留言
			$commentNum = M("book_comment")->count();//用户评论数量
    		return array('leaveNum'=>$leaveNum,'leaveData'=>$leaveData,'commentNum'=>$commentNum);
		}
?> 