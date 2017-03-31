<?php
/**
 * 极客之家 高端PHP - 首页模块
 *
 * @copyright  Copyright (c) 2016 QIN TEAM (http://www.qlh.com)
 * @license    GUN  General Public License 2.0
 * @version    Id:  Type_model.php 2016-6-12 16:36:52
 */
namespace Home\Controller;
use Think\Controller;
header('content-type:text/html;charset=utf8');
class IndexController extends Controller {

    /**
     * 首页
     * @return [type] [description]
     */
    public function index()
    {
        $search = I("post.search");
        $where = 1;
        $where .= " and book_errasy.bt like '%$search%'";
    	$z=M("book_errasy")->join("book_errasy_fb on book_errasy.s_id=book_errasy_fb.s_id");

    	$res=$z->order("id desc")->where($where)->limit(6)->select();
    	//print_r($res);die;
        
    	$this->right();

        $this->assign("res",$res);
        $this->assign("search",$search);

        $this->display();
    }

    /**
     * 用户登录
     * @return [type] [description]
     */
    function userLogin()
    {
        $name = I("get.name");
        $password = I("get.password");
        $res = M("book_user")->where("username='$name'")->find();
        if($res)
        {
            if($res['password'] == $password)
            {
                //登录成功
                session("userId",$res['user_id']);
                session("userName",$res['username']);
                $result['success'] = "1";
                exit(json_encode($result));
            }
            else
            {
                $result['return'] = "密码输入错误";
                exit(json_encode($result));
            }
        }
        else
        {
            $result['return'] = "用户不存在";
            exit(json_encode($result));
        }
    }

    /**
    * 退出登录
    * @return [type] [description]
    */
    function UserEnd()
    {
        session(null);
        $this->success("退出成功",U("Index/index"));
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

      /* 文章推荐 */
      
        $recom=$z->where("id in(7,8,9,10,11)")->select();//精心推荐
    
        $new=$z->order("id desc")->limit(5)->select();//最新文章
    
        $rand=$z->order("rand()")->limit(5)->select();//随机文章

        $this->assign("recom",$recom);//精心推荐
        $this->assign("new",$new);  //最新文章
        $this->assign("rand",$rand);//随机文章
    }

    /**
     * 阅读文章
     * @return [type] [description]
     */
    function read()
    {
        $id=intval(I("get.id"));
        $name = session("userName");
        //评论查询
        $a = implode(',',M("book_comment")->where("h_id='$id'")->limit(50)->order("c_id desc")->getField("c_id",true));
        // echo $a;die;
        if(!empty($a))
        {
            $commintData =  $re=M("book_comment as bc")->join("book_user as bu on bu.user_id=bc.user_id")->where("c_id in($a)")->order("c_id asc")->select();
        }
        // print_r($commintData);die;
        //以下修改文章点击量
        $count = M("book_errasy")->where("id='$id'")->getField("click");
        $num=$count + 1;
        M("book_errasy")->where("id='$id'")->save(array("click"=>$num));//修改点击量 + 1

        //查询当前文章详情
        $articleData = M("book_errasy")->join("book_errasy_fb on book_errasy.s_id=book_errasy_fb.s_id")->where("id='$id'")->find();
        $this->assign("articleData",$articleData);//文章详情
        $this->assign("commintData",$commintData);//评论内容
        $this->assign("name",$name);//用户
        $this->right();
        $this->display();
    }

    /**
     * 关于博主
     * @return [type] [description]
     */
    function about()
    {
    	$res=M("book_news")->select();
    	//print_r($res);die;
    	foreach ($res as $v) 
        {
    		$arr=$v;
    	}
    	$this->assign("res",$arr);

        $this->right();

    	$this->display();
    }

        /**
         * 评论发送
         * @return [type] [description]
         */
        function commentGet()
        {
            $content = I("get.content");
            $art_id = intval(I("get.art_id"));
            $name = I("get.name");
            $user_id = (empty(session("userId"))) ? "1" : session("userId");
            $res = M("book_comment")->add(array("user_id"=>$user_id,"nr"=>$content,"h_id"=>$art_id,"time"=>date("Y-m-d H:i:s",time())));
            if($res < 0){echo "0";}
        }


        /**
         * 评论查询
         * @return [type] [description]
         */
        function read_select()
        {
            $res=M("book_comment")->limit(10)->order("c_id desc")->getField("id",true);
            
            $a=implode(',',$res);
            //print_r($a);die;
            $res=M("book_comment")->where("c_id in($a)")->order("c_id asc")->select();
            //print_r($res);die;
            $this->assign("res",$res);
            $this->display("read");
        }


        /**
         * 学无止境
         * @return [type] [description]
         */
        function student()
        {
            //文章推荐
            $User = M('book_errasy'); 
            $p=isset($_GET["p"]) ? $_GET['p']: 1;
            $list = $User->where()->join("book_errasy_fb on book_errasy.s_id=book_errasy_fb.s_id")->order("id desc")->page($p.',6')->select();

            $count = $User->where()->count();
            $Page = new \Think\Page($count,5);
            $show = $Page->show();

            $this->assign('res',$list);
            $this->assign('page',$show);

            $this->right();
            
            $this->display();

        }

        
}