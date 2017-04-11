<?php
return array(
	// 加载扩展配置文件
	'LOAD_EXT_CONFIG' => 'db,image',

	'GROUP_TYPES' => array(
		1 => '脉点资讯',
		2 => '服务方案',
		3 => '客户案例',
		4 => '合作政策',
		),

	'JOB_TYPES' => array(
		1 => '市场类',
		2 => '研发类',
		3 => '业务类',
		4 => '职能类',
		5 => '管理类'
		),

	'JOB_AGES' => array(
		0 => '实习生',
		1 => '应届生',
		2 => '社会',
		),
	'JOB_SCHOOL' => array(
		0 => '校园宣讲',
		1 => '实习招聘',
		2 => '应届生招聘'
	),
	'CITYS' => array(
		1 => '上海',
		2 => '北京',
		3 => '广州',
		4 => '兰州',
		),

	'URGENCY_LEVEL' => array(
		1 => '普通',
		2 => '紧急',
		3 => '非常紧急',
		),

	'ACTIVITY_TYPES' => array(
		1 => '校园宣讲',
		2 => '市场推广',
		3 => '专题交流',
		),

	'SLIDER_TYPES' => array(
		1 => '大幻灯片',
		2 => '最新动态',
		3 => '业务洞察',
		),
	
	'SERVICE_TYPES' => array(
		0 => array('name' => '企业内容管理','title' => 'consult'),
		1 => array('name' => '业务流程管理','title' => 'dev'),
		2 => array('name' => '系统定制开发','title' => 'maintenance'),
		3 => array('name' => '培训顾问服务','title' => 'train')
	),
	'ABOUT_TYPES' => array(
		0 => '公司简介',
		1 => '服务网络',
		2 => '合作伙伴',
		3 => '企业文化'
	),

	//---------------------------------------------------
	// 模块设置
	//
	'MODULE_ALLOW_LIST' => array('Portal', 'Admin'),
	'DEFAULT_MODULE' => 'Portal',
	'MODULE_DENY_LIST' => array('Common'), // 设置禁止访问的模块列表

	//---------------------------------------------------
	// URL设置
	//
	'URL_MODEL' => 2,

	// URL不区分大小写
	'URL_CASE_INSENSITIVE' => true,

	'URL_HTML_SUFFIX' => 'html', // URL伪静态后缀设置

	//---------------------------------------------------
	// 模板设置
	//
	'TMPL_TEMPLATE_SUFFIX' => '.html', // 模板后缀名

	// 'DEFAULT_FILTER' => 'htmlspecialchars',
	'DEFAULT_CHARSET' => 'utf-8', // 默认输出编码

	//---------------------------------------------------
	// session设置
	//

	//'SESSION_TYPE' => 'db',

	'ERROR_MESSAGE' => '页面错误！请稍后再试～', //错误显示信息,非调试模式有效
	'ERROR_PAGE' => '', // 错误定向页面
	'SHOW_ERROR_MSG' => false, // 显示错误信息
	'TRACE_MAX_RECORD' => 100, // 每个级别的错误信息 最大记录数

	'PATH' => array(
		'FILES' => __ROOT__ . '/files',
		'IMG_FILES' => __ROOT__ . '/files/images',
		'VDO_FILES' => __ROOT__ . '/files/videos',
	),

	// 'SHOW_PAGE_TRACE' =>true, 

	// //默认错误跳转对应的模板文件
	// 'TMPL_ACTION_ERROR' => 'Public:error',
	// //默认成功跳转对应的模板文件
	// 'TMPL_ACTION_SUCCESS' => 'Public:success',
);