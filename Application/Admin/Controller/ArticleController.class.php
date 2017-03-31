<?php
/**
 * 极客之家 高端PHP - 文章模块
 *
 * @copyright  Copyright (c) 2016 QIN TEAM (http://www.qlh.com)
 * @license    GUN  General Public License 2.0
 * @version    Id:  Type_model.php 2016-6-12 16:36:52
 */
namespace Admin\Controller;
use Think\Controller;
class ArticleController extends CommonController {

	/**
     * 新增作品
     * @return [type] [description]
     */
    function article(){
    	$res=M("book_errasy_fb")->select();
        $title = M('book_errasy_fb')->select();
        $this->assign("res",$res);
    	$this->assign("title",$title);
    	$this->display();
    }

    /**
     * 文章添加
     * @return [type] [description]
     */
    function article_add(){
    	$data=I("post.");
        $data['nr']=I('post.nr','','stripslashes');
    	$data['time']=date("Y-m-d H:i:s",time());
        $upload = new \Think\Upload();// 实例化上传类    
        $upload->maxSize = 3145728 ;// 设置附件上传大小    
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型    
        $upload->savePath  = './Public/Uploads/'; // 设置附件上传目录    // 上传文件     
        $upload->rootPath="./";
        $info = $upload->upload(); 
        $photo=$info['photo']['savepath'].$info['photo']['savename'];
        $data['photo']=$photo;   
        if(!$info) {// 上传错误提示错误信息        
            $this->error($upload->getError());    
        }

    	//print_r($data);die;
    	$res=M("book_errasy")->join("book_errasy_fb on book_errasy.s_id=book_errasy_fb.s_id")->add($data);
    	if($res){
    		$this->success("发布成功");
    	}else{
    		$this->error("发布失败");
    	}
    }

    /**
     * 查看文章
     * @return [type] [description]
     */
    function design(){
    	//echo 111;die;
    	  	 
    	$bt=I("get.bt");//接收搜索值

    	$User = M('book_errasy'); // 实例化User对象// 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
    	$p=isset($_GET["p"]) ? $_GET['p']: 1;
    	$list = $User->where("bt like '%$bt%'")->order("id desc")->page($p.',5')->join("book_errasy_fb on book_errasy.s_id=book_errasy_fb.s_id")->select();
        
        //限制文章标题
        foreach ($list as $key => $val) 
        {
            $list[$key]['bt'] = mb_strlen($val['bt'], 'utf-8') > 9 ? mb_substr($val['bt'], 0, 9, 'utf-8').'....' : $val['bt'];
        }
    	$count = $User->where("bt like '%$bt%'")->count();
    	$Page = new \Think\Page($count,5);
    	$show = $Page->show();

        $title = M('book_errasy_fb')->select();
        // print_r($title);die;

    	$this->assign('res',$list);
        $this->assign('page',$show);
    	$this->assign('title',$title);
    	$this->display();
    }

    /**
     * 文章修改
     * @return [type] [description]
     */
    function articleUpdate()
    {
        $art_id = I("get.id");
        if(I("post."))
        {
            $data=I("post.");
            $art_id = $data['art_id'];
            unset($data['art_id']);
            $data['nr']=I('post.nr','','stripslashes');
            $data['time']=date("Y-m-d H:i:s",time());
            $upload = new \Think\Upload();// 实例化上传类    
            $upload->maxSize = 3145728 ;// 设置附件上传大小    
            $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型    
            $upload->savePath  = './Public/Uploads/'; // 设置附件上传目录    // 上传文件     
            $upload->rootPath="./";
            $info = $upload->upload(); 
            $photo=$info['photo']['savepath'].$info['photo']['savename'];
            $data['photo']=$photo;   
            if(!$info) {// 上传错误提示错误信息        
                $this->error($upload->getError());    
            }

            //print_r($data);die;
            $res=M("book_errasy")->join("book_errasy_fb on book_errasy.s_id=book_errasy_fb.s_id")->where("id='$art_id'")->save($data); 
            if($res)
            {
                $this->success("修改成功",U("Article/design"));
            }
            else
            {
                $this->error("修改失败");
            }
        }
        else
        {
            $this->assign('art_id',$art_id);
            $content = M("book_errasy b")->where("b.id=".$art_id)->find();
            $class = M('book_errasy_fb')->select();
            $this->assign('content',$content);
            $this->assign('class',$class);
            $this->display();
        }
    }

    /**
     * 删除文章
     * @return [type] [description]
     */
    function articleDelete()
    {
        $art_id = I("get.id");
        $res = M("book_errasy")->where("id='$art_id'")->delete();
        if($res)
        {
            $this->success("删除成功",U("Article/design"));
        }
        else
        {
            $this->error("删除失败");
        }
    }

    /**
     * 下拉菜单搜索
     * @return [type] [description]
     */
    function article_class()
    {
        $s_id = I("get.s_id");
        $res = M("book_errasy_fb as bf")->join("book_errasy as b on bf.s_id=b.s_id")->where("bf.s_id=".$s_id)->field("b.bt,b.nr,b.click,b.name,b.time,b.id,bf.s_name")->select();
        foreach ($res as $key => $val) {
            $res[$key]['bt'] = mb_strlen($val['bt'], 'utf-8') > 9 ? mb_substr($val['bt'], 0, 9, 'utf-8').'....' : $val['bt'];
        }
        exit(json_encode($res));
    }

    /**
     * 普通搜索
     * @return [type] [description]
     */
    function getTextSearch()
    {
        $search = I("get.search");
        $res = M("book_errasy as b")->join("book_errasy_fb as bf on bf.s_id=b.s_id")->where("bt like '%$search%'")->select();
        foreach ($res as $key => $val) {
            $res[$key]['bt'] = mb_strlen($val['bt'], 'utf-8') > 9 ? mb_substr($val['bt'], 0, 9, 'utf-8').'....' : $val['bt'];
        }
        exit(json_encode($res));
    }
}