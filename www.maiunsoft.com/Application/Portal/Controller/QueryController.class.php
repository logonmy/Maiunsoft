<?php

namespace Portal\Controller;

class QueryController extends PortalController {

	public function search($k='') {
		if (empty($k)) {
			$this->error('对不起，请先输入要搜索的词');
		}

		// 构建查询
		$map['name'] = array('LIKE', '%' . $k . '%');
		$map['bref'] = array('LIKE', '%' . $k . '%');
		$map['_logic'] = 'OR';
		$this->productQueryList = M('product')->where($map)->field('id,name,bref,thumbnail')->select();

		unset($map['name']);
		$map['title'] = array('LIKE', '%' . $k . '%');
		$this->articleQueryList = M('article')->where($map)->field('id,title,bref,thumbnail')->select();
		
		// 构造导航
		$this->breadcrumbs = array(array('caption'=>'整站查询'),
								   array('caption'=>'查询：'.$k));

		// 页面seo
		//
		$this->_PageHeader = array(
			'title' => '信息查询',
			'keywords' => '软件产品,解决方案',
			'description' => '聚焦数字世界，服务现代生活'
			);

		$this->theme($this->_theme)->display('index');

	}
}