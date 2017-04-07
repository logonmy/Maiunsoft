<?php

namespace Portal\Model;

use Think\Model\ViewModel;

class NewsViewModel extends ViewModel {

	public $viewFields = array(
		'news' => array('id', 'title', 'bref', 'content', 'top'),
		'package' => array('name' => 'package_name', '_on' => 'news.package=package.id'),
	);
}