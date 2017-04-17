<?php

// 格式化打印数组
function P($array) {
	echo '<pre>';
	print_r($array);
	echo '</pre>';
}

// 初始化一个service服务
function Service($name='')
{
	// 
	if(empty($name)) return new Common\CommonService;

    static $_model  =   array();
    $class          =   parse_res_name($name,'Service');
    if(class_exists($class)) {
        $model      =   new $class(basename($name));
    }elseif(false === strpos($name,'/')){
        // 自动加载公共模块下面的模型

        $class      =   '\\Common\\Service\\'.$name.'Service';
        $model      =   class_exists($class)? new $class($name) : new \Common\Service($name);
    }else {
        Think\Log::record('D方法实例化没找到模型类'.$class,Think\Log::NOTICE);
        $model      =   new Common\Service(basename($name));
    }
    $_model[$name.$layer]  =  $model;
    return $model;
}

function RootPath()
{
	return dirname(dirname(dirname(dirname(__FILE__))));
}

function UploadUrl($layer='')
{
	if(empty($layer)) return false;

	return 'http://'.$_SERVER['HTTP_HOST'].__ROOT__.'/Uploads/'.$layer.'/';
}

/**
 * 获取当前页面完整URL地址
 */
function get_url() {
	$sys_protocal = isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == '443' ? 'https://' : 'http://';
	$php_self = $_SERVER['PHP_SELF'] ? $_SERVER['PHP_SELF'] : $_SERVER['SCRIPT_NAME'];
	$path_info = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '';
	$relate_url = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : $php_self . (isset($_SERVER['QUERY_STRING']) ? '?' . $_SERVER['QUERY_STRING'] : $path_info);
	return $sys_protocal . (isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '') . $relate_url;
}

function IMG($savepath, $savename) {

	if (!isset($savename, $savepath)) {
		return false;
	}

	$root = __ROOT__ . substr(C('UPLOAD.ROOT_FOLD'), 1);

	return $root . $savepath . $savename;
}


//数据过滤
function subtext($text,$length){
	if(mb_strlen($text,'utf8') > $length)
	return mb_substr($text,0,$length,'utf8')."...";
	return $text;
}


?>