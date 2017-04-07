<?php
namespace Portal\Controller;

class IndexController extends PortalController {

	public function index() {

		// 页面seo
		//
		$this->_PageHeader = array(
			'title' => '聚焦数字世界，服务现代生活',
			'keywords' => '',
			'description' => ''
			);

		// 获取banner图
		$this->bigSliderList = M('slider')->where('type=1')->order('id DESC')->select();

		$this->newsList = M('slider')->where('type=2')->order('id DESC')->select();

		$this->articleList = M('slider')->where('type=3')->order('id DESC')->select();

		$this->theme($this->_theme)->display('index');
	}
}

?>