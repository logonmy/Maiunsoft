<?php

namespace Admin\Controller;

class HomeController extends AdminController {

	public function index() {

        $title = '脉云官网后台管理空间';
		$this->pageGuid = array('icon' => 'windows','title' => $title,'nav' => null);
		$this->display();
	}
}