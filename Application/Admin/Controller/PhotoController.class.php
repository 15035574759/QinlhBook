<?php
/**
 * 极客之家 高端PHP - 照片管理模块
 *
 * @copyright  Copyright (c) 2016 QIN TEAM (http://www.qlh.com)
 * @license    GUN  General Public License 2.0
 * @version    Id:  Type_model.php 2016-6-12 16:36:52
 */
namespace Admin\Controller;
use Think\Controller;
header('content-type:text/html;charset=utf8');
class PhotoController extends CommonController {

	/**
	 * 照片列表
	 * @return [type] [description]
	 */
	public function photo()
	{
        $User = M('book_photo'); 
        $p=isset($_GET["p"]) ? $_GET['p']: 1;
        $list = $User->order("id asc")->page($p.',20')->select();

        $count = $User->count();
        $Page = new \Think\Page($count,20);
        $show = $Page->show();

        $this->assign('res',$list);
        $this->assign('page',$show);
        $this->display();
	}

	/**
	 * 添加照片
	 * @return [type] [description]
	 */
	function photo_add()
	{
		$this->display();
	}

	/**
	 * 添加照片入库
	 * @return [type] [description]
	 */
	function photo_add_pro()
	{
		$data=I("post.");
		$data['time']=date("Y-m-d H:i:s",time());
		$upload = new \Think\Upload();// 实例化上传类    
		$upload->maxSize = 3145728 ;// 设置附件上传大小    
		$upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型    
		$upload->savePath = './Public/Uploads/'; // 设置附件上传目录    // 上传文件     
		$upload->rootPath="./";
		$info = $upload->upload();  
		 $photo=$info['photo']['savepath'].$info['photo']['savename'];
	  		// /*
     //        裁剪
     //      */  
     //     $image = new \Think\Image();
     //     $image->open($photo);// 生成一个缩放后填充大小150*150的缩略图并保存为thumb.jpg
     //     $image->thumb(150, 150)->save("./Public/thumb/".$info['photo']['savename']);
        //print_r($photo);die;thumb
		if(!$info) {// 上传错误提示错误信息        
			$this->error($upload->getError());    
		}
		$data['photo']=$photo;
		//实例化表
        $z=M("book_photo");
        //print_R($z);die;
        $re=$z->add($data);
        //print_r($re);die;
        if($re)
        {
            $this->success('添加成功',U('Photo/photo'));
        }
        else
        {
            $this->error('添加失败');
        }
	}
}