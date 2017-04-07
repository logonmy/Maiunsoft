<?php

namespace Portal\Widget;

use Think\Controller;

class GuidWidget extends Controller {

	/**
	 * 顶部标题
	 *
	 * @param string $name [description]
	 */
	public function Top($name = '') {
		$this->top_name = $name;
		layout(false);
		return $this->display('Widget:guid-top');
	}

	/**
	 * 显示包导航
	 *
	 * @param string $name [模块名称]
	 * @param string $type [类型]
	 */
	public function Package($name = '', $type = '', $cur = '') {
		if (empty($name) || empty($type)) {
			return;
		}

		$this->cur = $cur;
		$this->name = $name;
		$this->package_list = M('package')->where('type=%d', $type)->select();
		layout(false);
		return $this->display('Widget:guid-package');
	}

	/**
	 * 显示包导航
	 *
	 * @param string $name [模块名称]
	 * @param string $type [类型]
	 */
	public function Sidebar($name = '', $type = '') {
		if (empty($name) || empty($type)) {
			return;
		}

		$this->name = $name;
		$this->package_list = M('package')->where('type=%d', $type)->select();
		layout(false);
		return $this->display('Widget:guid-sidebar');
	}

}