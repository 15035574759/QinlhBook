<?php
/**
 * 极客之家 高端PHP - 权限模块
 *
 * @copyright  Copyright (c) 2016 QIN TEAM (http://www.qlh.com)
 * @license    GUN  General Public License 2.0
 * @version    Id:  Type_model.php 2016-6-12 16:36:52
 */
namespace Admin\Controller;
use Think\Controller;
class LimitsController extends CommonController {
	
    /**
     * 管理员添加
     * @return [type] [description]
     */
    function login_add(){
        $res=M("book_role")->select();
        $this->assign("res",$res);
       // print_r($res);die;
        $this->display();
    }

    /**
     *  管理员添加执行入库
     * @return [type] [description]
     */
    function login_add_pro()
    {
        $data=I("post.");
        $username=I("post.username");
        $data['password'] = md5($data['password']);
        $res=M("book_login")->where("username='$username'")->select();
        if($res)
        {
           $this->error("账号已存在");
        }

        $res_id=M("book_login")->add($data);    
            //print_r($res_id);die;
        if($res_id > 0)
        {
            foreach ($data['role_id'] as $v) 
            {
                $temp['role_id']=$v;
                //print_r($temp);
                 $temp['r_id']=$res_id;
                 //print_r($temp);
                if(M("book_login_role")->add($temp)==false)
                {
                    $this->error("添加失败");die;
                    //清楚已添假的管理员
                    M("book_login")->where("id='$res_id'")->delete();
                }
            }

             $this->success('添加成功',U("Limits/login_show"));

         }
         else
         {
            $this->error('添加失败');
         }
            
    }

    /**
     * 管理员展示
     * @return [type] [description]
     */
    function login_show()
    {
        $res=M("book_login")->select();
        $this->assign("res",$res);
        $this->display();
    }

    
    /**
     * 管理员展示
     * @return [type] [description]
     */
    function login_save()
    {
        $id=I("get.id");
        $res=M("book_login")->where("id='$id'")->select();
        foreach ($res as $v) 
        {
           $arr=$v;
        }
         
           //print_r($res);die;
        $res=M("book_role")->select();

        $re=M("book_login_role")->where("r_id='$id'")->select();
       // print_r($re);die;
       
       $str=array();
        foreach($re as $value){
                $str[]=$value['role_id'];
                
        }
            //print_r($str);die;
            foreach($res as $key=>$val)
            {
                foreach($str as $v)
                {
                    if($val['role_id']==$v)
                    {
                        $res[$key]['p'].=$v;
                    }
                }
            }
        //print_r($res);die;
        $this->assign("res",$res);

        $this->assign("arr",$arr);
        $this->display();
        
    }

    /**
     * 管理员修改添加
     * @return [type] [description]
     */
    function login_save_pro()
    {

        $data=I("post.");
        $data['password'] = md5(I("post.password"));
        // print_r($data);die;
        $id=I("post.id"); 
       
        //print_r($id);die
            
        M("book_login")->where("id='$id'")->delete();
        M("book_login_role")->where("r_id='$id'")->delete();

        $res_id=M("book_login")->add($data);
          // print_r($res_id);die;
   
        if($res_id > 0){

         foreach ($data['role_id'] as $k => $v) 
         {
            //print_r($v);die;
             $temp['role_id']=$v;
             //print_r($temp);
             $temp['r_id']=$res_id;
             //print_r($temp);
            if(M("book_login_role")->add($temp)==false)
            {

                $this->error("添加失败");die;

                //清楚已添假的管理员
                M("book_login")->where("id='$res_id'")->delete();
            }
        }

            $this->success('修改成功',U("Limits/login_show"));

        }
        else
        {

            $this->error('修改失败');
        }
        
    }

    /**
     *  管理员删除
     * @return [type] [description]
     */
    function login_del(){
        $id=I("get.id");
        $res=M("book_login")->where("id='$id'")->delete();
        if($res){
            $this->success("删除成功");
        }else{
            $this->error("删除失败");
        }
    }

    /**
     * 角色管理
     * @return [type] [description]
     */
    function role_show()
    {
        $res=M("book_role")->select();
        // print_r($res);die;
        $this->assign("res",$res);
        
        $this->display();

    }

    /**
     * 角色添加展示
     * @return [type] [description]
     */
    function role_add()
    {
        $res=M("book_node")->select();

         $node_parent=M("book_node")->where("pid=0")->select();//查询父类id
            //print_r($node_parent);die;
            foreach ($node_parent as $key => $val) 
            {
                $node_parent[$key]['son'] = M("book_node")->where("pid=$val[node_id]")->select();
            }

        $this->assign("node_parent",$node_parent);
        $this->assign("res",$res);
        $this->display();
    }

    /**
     * 角色修改
     * @return [type] [description]
     */
    function role_save()
    {

        $id=I("get.id");
        // echo $id;die;
        //查询当前节点表名称
        $res=M("book_role")->where("role_id='$id'")->select();
        foreach ($res as $v) 
        {
           $arr=$v;
        }

        //查询当前角色所有节点权限
        $role_node=M("book_role_node")->where("role_id='$id'")->getField("node_id",true);
         
        //查询所有父类节点  
        $node_parent=M("book_node")->where("pid=0")->select();
        //print_r($node_parent);die;
        
         foreach ($node_parent as $key => $val) 
         {
               //print_r($val);
               
                //在所有节点列表里，标示当前角色拥有的节点
                if(in_array($val['node_id'], $role_node))
                {
                    $node_parent[$key]['p'] = 1;
                }

                //查询父类id = 节点id所有值
                $temp=M("book_node")->where("pid=$val[node_id]")->select();
                //print_r($temp);
        
                //检查当前角色是否有子节点权限
                if($temp){
                    foreach ($temp as $k => $v) 
                    {
                        if(in_array($v['node_id'], $role_node))
                        {
                            $temp[$k]['p'] = 1;
                         }
                    }
                }

                $node_parent[$key]['son'] = $temp;
            }

        // print_r($node_parent);die;
        $this->assign("node_parent",$node_parent);
        $this->assign("arr",$arr);
        $this->display();
        
    }
    
    /**
     * 角色修改添加
     * @return [type] [description]
     */
    function role_save_pro()
    {
        $data=I("post.");
        $id=I("post.id"); 
        //print_r($id);die;
        $role_name=I("post.role_name");
        $role_desc=I("post.role_desc");
        // echo $id;die;

        //M("book_role")->where("role_id='$id'")->delete();
        M("book_role_node")->where("role_id='$id'")->delete();

        $res_id=M("book_role")->where("role_id='$id'")->save(array("role_name"=>$role_name,"role_desc"=>$role_desc));
           // print_r($res_id);die;
        if($res_id > 0)
        {

            foreach ($data['node_id'] as $v) 
            {
                $temp['node_id'] = $v;
                //print_r($temp);die;
                 $temp['role_id'] = $id;
                 // print_r($temp);
                if(M("book_role_node")->add($temp) == false)
                {
                    $this->error("添加失败");die;
                    //清楚已添假的管理员
                    M("book_role")->where("role_id='$id'")->delete();
                }
            }

            $this->success('修改成功',U("Limits/role_show"));

         }
         else
         {
            $this->error('修改失败');
         }     
    }



    /**
     * 角色删除
     * @return [type] [description]
     */
    function role_del()
    {
        $id=I("get.id");
        $res=M("book_role")->where("role_id='$id'")->delete();
        if($res)
        {
            $this->success("删除成功");
        }
        else
        {
            $this->error("删除失败");
        }
    }

    /**
     * 节点管理
     * @return [type] [description]
     */
    function node_show()
    {
        $User = M('book_node'); 
        $list = $User->page($_GET['p'].',15')->select();
        $count = $User->count();
        $Page  = new \Think\Page($count,15);
        $show = $Page->show();
        $this->assign('page',$show);
         $this->assign('res',$list);// 赋值数据集
        $this->display("node_show"); 
    }

    /**
     * 节点添加
     * @return [type] [description]
     */
    function node_add()
    {
        $node_list = M("book_node")->select();
        $list=$this->getNodeList($node_list);
        //print_r($list);die;
       
        $this->assign("list",$list);
        $this->display();
    }

    
    /**
     * 递归查询所有权限
     * @param  [type]  $node_list [description]
     * @param  integer $pid       [description]
     * @param  integer $leave     [description]
     * @return [type]             [description]
     */
    function getNodeList($node_list,$pid=0,$leave=0)
    {
        
        //print_r($node_list);die;
             static $result;
            foreach ($node_list as $key => $val) 
            {
                //print_r($val);
                if($val['pid'] == $pid)
                {
                    $val['leave']=$leave;
                    $result[]=$val;
                    $this->getNodeList($node_list,$val['node_id'],$leave+1);
                }
            }
            return $result;
    }

    /**
     * 节点添加入库
     * @return [type] [description]
     */
    function node_add_pro()
    {
        $data=I("post.");
        $res=M("book_node")->add($data);
        if($res)
        {
            $this->success("添加成功",U('Limits/node_show'));
        }
        else
        {
            $this->error("添加失败");
        }
    }

    /**
     * 节点删除
     * @return [type] [description]
     */
    function node_del()
    {
        $id=I("get.id");
        $res=M("book_node")->where("node_id='$id'")->delete();
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