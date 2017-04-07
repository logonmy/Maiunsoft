<?php
return array(

	// 加载扩展配置文件
	'LOAD_EXT_CONFIG' => 'menu',

	'URL_MODEL'       =>  1, 

	// 开启模板布局
	'LAYOUT_ON' => true,
	'LAYOUT_NAME' => 'layout',

	'DEFAULT_CONTROLLER' => 'Login',


	'AUTOLOAD_NAMESPACE' => array('Addons' => './Addon/'),

	// 模板中的常量设置
	//
	'TMPL_CONTENT_TYPE' => 'text/html', // 默认模板输出类型
	'TMPL_TEMPLATE_SUFFIX' => '.html', // 默认模板文件后缀

	'TMPL_PARSE_STRING' => array(
		'__LIB__' => __ROOT__ . '/_Library',
		'__LIB_STATIC__' => __ROOT__ . '/_Library/Static',
		'__MOD_STATIC__' => __ROOT__ . substr(APP_PATH, 1) . 'Admin/View/_Static',
	),

	'TMPL_ACTION_ERROR'     =>  '_Public:error', // 默认错误跳转对应的模板文件
	'TMPL_ACTION_SUCCESS'   =>  '_Public:success', // 默认成功跳转对应的模板文件
	// 'TMPL_EXCEPTION_FILE'   =>  '_Public:exception', // 异常页面的模板文件
	// 
	

	'AUTH_CONFIG' => array(
	    'AUTH_ON' => true, //认证开关
	    'AUTH_TYPE' => 1, // 认证方式，1为时时认证；2为登录认证。
	    'AUTH_GROUP' => 'tbl_auth_group', //用户组数据表名
	    'AUTH_GROUP_ACCESS' => 'tbl_auth_group_access', //用户组明细表
	    'AUTH_RULE' => 'tbl_auth_rule', //权限规则表
	    'AUTH_USER' => 'tbl_staff'
    ),

    'ADMIN_USER' => array(
    	'username' => 'rootadmin',
    	'password' => '698d51a19d8a121ce581499d7b701668',
    	),

);
