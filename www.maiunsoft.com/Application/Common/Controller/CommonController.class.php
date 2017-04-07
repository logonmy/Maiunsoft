<?php

namespace Common\Controller;

/**
 *
 * 整个程序的控制器基类
 *
 */
use \Think\Controller;

class CommonController extends Controller {

	public $current_ip = '';
	public $current_area = '';

	function __construct() {
		parent::__construct();

	}

	/**
	 * 显示页面
	 * @param  string $templateFile 页面名称
	 * @param  string $page_title 页面标题
	 * @return [type]
	 */
	public function show_page($templateFile = '',
		$page_title = '',
		$page_keywords = '',
		$page_discription = '') {

		// 设置页面的三元素，标题，关键词，描述
		$this->page_title = $page_title;
		$this->page_keywords = $page_keywords;
		$this->page_discription = $page_discription;

		$this->display('Tpl:' . $templateFile, 'UTF-8');
	}

	public function edit_result($result, $url = '') {
		if (!$result) {
			$this->error('失败了');
		}

		if (empty($url)) {
			$this->success('编辑成功了');
		} else {

			$this->success('编辑成功了', U($url));
		}
	}
}
