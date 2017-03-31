<?php
/**
 * 极客之家 高端PHP - 日记模块
 *
 * @copyright  Copyright (c) 2016 QIN TEAM (http://www.qlh.com)
 * @license    GUN  General Public License 2.0
 * @version    Id:  Type_model.php 2016-6-12 16:36:52
 */
namespace Admin\Controller;
use Think\Controller;
class DiaryController extends CommonController {

    /**
     * 日记列表
     * @return [type] [description]
     */
    function diary()
    {
    	$User = M('book_shuoshuo'); // 实例化User对象// 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
    	$p=isset($_GET["p"]) ? $_GET['p']: 1;
    	$list = $User->where()->order("id desc")->page($p.',5')->select();

    	$count = $User->where()->count();
    	$Page = new \Think\Page($count,5);
    	$show = $Page->show();

    	$this->assign('res',$list);
    	$this->assign('page',$show);
    	$this->display();
    }

		/**
		 * 日记查看
		 * @return [type] [description]
		 */
		function diary_show()
		{
			$id=I("get.id");
			$res=M("book_shuoshuo")->where("id='$id'")->find();
			// print_r($res);die;
			$this->assign("res",$res);
			$this->display();
		}

		/**
		 * 添加日记
		 * @return [type] [description]
		 */
		function diary_add()
		{
			$this->display();
		}

		/**
		 * 日记发布
		 * @return [type] [description]
		 */
		function diary_fabu()
		{
			$data=I("post.");
			$data['rj']=I('post.rj','','stripslashes');
			$upload = new \Think\Upload();// 实例化上传类    
			$upload->maxSize = 3145728;// 设置附件上传大小    
			$upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型    
			$upload->savePath  = './Public/Uploads/'; // 设置附件上传目录    // 上传文件     
			$upload->rootPath="./";
			$info = $upload->upload(); 
			$photo=$info['photo']['savepath'].$info['photo']['savename'];
			$data['photo']=$photo;   
			if(!$info) 
			{// 上传错误提示错误信息        
				$this->error($upload->getError());    
			}

			$res=M("book_shuoshuo")->add($data);
			if($res)
			{
    			$this->success("发布成功",U("Diary/diary"));
    		}
    		else
    		{
    			$this->error("发布失败");
    		}
		}

		/**
		 * 日记修改
		 * @return [type] [description]
		 */
		function diary_save()
		{
			$diary_id = I("get.diary_id");
			if(I("post."))
			{
				$data=I("post.");
				$diary_id = $data["diary_id"];
				$data['rj']=I('post.rj','','stripslashes');
				$upload = new \Think\Upload();// 实例化上传类    
				$upload->maxSize = 3145728 ;// 设置附件上传大小    
				$upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型    
				$upload->savePath  = './Public/Uploads/'; // 设置附件上传目录    // 上传文件     
				$upload->rootPath="./";
				$info = $upload->upload(); 
				$photo=$info['photo']['savepath'].$info['photo']['savename'];
				$data['photo']=$photo; 
				unset($data['diary_id']); 
				// if(!$info) 
				// {// 上传错误提示错误信息        
				// 	$this->error($upload->getError());    
				// }
				// print_r($data);die;
				$res=M("book_shuoshuo")->where("id='$diary_id'")->save($data);
				if($res)
				{
	    			$this->success("修改成功",U("Diary/diary"));
	    		}
	    		else
	    		{
	    			$this->error("修改失败");
    		}
			}
			else
			{
				$diarySaveData = M("book_shuoshuo")->where("id=".$diary_id)->find();
				$this->assign("diarySaveData",$diarySaveData);
				$this->assign("diary_id",$diary_id);
				$this->display();
			}
		}

		/**
		 * 日记删除
		 * @return [type] [description]
		 */
		function diary_del()
		{
			$id=I("get.id");
			$res=M("book_shuoshuo")->where("id='$id'")->delete();
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