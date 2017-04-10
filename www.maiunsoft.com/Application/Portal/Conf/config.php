<?php
return array(

	// 加载其他扩展文件
	// 'LOAD_EXT_CONFIG' => 'route',

	// 开启模板布局
	'LAYOUT_ON' => true,
	'LAYOUT_NAME' => 'layout',

	'DEFAULT_THEME' => 'Pc',

	'TMPL_PARSE_STRING' => array(
		'__PUBLIC__' => __ROOT__ . '/Public',
		'__ARTICLE_ROOT__' => __ROOT__ . substr(APP_PATH, 1) . 'UploadFiles/article/',
		'__PRODUCT_ROOT__' => __ROOT__ . substr(APP_PATH, 1) . 'UploadFiles/product/',
		'__IMG_SUBJECT_ROOT__' => __ROOT__ . substr(APP_PATH, 1) . 'UploadFiles/subject/image/',
		'__PUBLIC_STATIC__' => __ROOT__ . '/Public/_static',
		'__PC_STATIC__' => __ROOT__ . substr(APP_PATH, 1) . 'Portal/View/Pc/Static',
		'__MB_STATIC__' => __ROOT__ . substr(APP_PATH, 1) . 'Portal/View/Mobile/Static',
		'__TB_STATIC__' => __ROOT__ . substr(APP_PATH, 1) . 'Portal/View/Tablet/_static',
	),
	
	//路由开启
	'URL_ROUTER_ON'   => true,
	
	'URL_MODEL' => 1,

	'TMPL_ACTION_ERROR'     =>  'Public:dispatch_jump', // 默认错误跳转对应的模板文件
	'TMPL_ACTION_SUCCESS'   =>  'Public:dispatch_jump', // 默认成功跳转对应的模板文件

	// 开启静态缓存
	// 'HTML_CACHE_ON' => true, // 开启静态缓存
	// 'HTML_CACHE_TIME' => 600, // 全局静态缓存有效期（秒）
	// 'HTML_FILE_SUFFIX' => '.shtml', // 设置静态缓存文件后缀
	// 'HTML_CACHE_RULES' => array( // 定义静态缓存规则
	// 	'*' => array('{$_SERVER.REQUEST_URI|md5}'),

	// ),

);