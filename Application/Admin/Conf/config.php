<?php
return array(
	'DEFAULT_MODULE'        =>  'Admin',  // 默认模块
	'DEFAULT_CONTROLLER'    =>  'Index', // 默认控制器名称

	//数据库配置信息
	'DB_TYPE'   => 'mysql', // 数据库类型
	'DB_HOST'   => 'localhost', // 服务器地址
	'DB_NAME'   => 'qlh_book', // 数据库名
	'DB_USER'   => 'root', // 用户名
	'DB_PWD'    => 'root', // 密码
	'DB_PORT'   => 3306, // 端口
	//'DB_PREFIX' => 'think_', // 数据库表前缀 
	'DB_CHARSET'=> 'utf8', // 字符集

	'SUPER_ADMIN' => '秦林慧',//超级管理员权限
	'PUBLIC_CONTROLLER'  =>  array('Index'),//超级管理员方法
);