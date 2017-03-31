<?php
/**
 * 极客之家 高端PHP - 照片模块
 *
 * @copyright  Copyright (c) 2016 QIN TEAM (http://www.qlh.com)
 * @license    GUN  General Public License 2.0
 * @version    Id:  Type_model.php 2016-6-12 16:36:52
 */
namespace Home\Controller;
use Think\Controller;
header('content-type:text/html;charset=utf8');
class PhotoController extends Controller {

        /**
         * 照片展示
         * @return [type] [description]
         */
        function photo()
        {
            $User = M('book_photo'); 
            $p = isset($_GET["p"]) ? $_GET['p'] : 1;
            $list = $User->order("id asc")->page($p.',20')->select();

            $count = $User->count();
            $Page = new \Think\Page($count,20);
            $show = $Page->show();

            $this->assign('res',$list);
            $this->assign('page',$show);
            $this->display();
        }
}