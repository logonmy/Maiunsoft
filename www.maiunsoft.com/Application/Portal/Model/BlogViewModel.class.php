<?php

namespace Portal\Model;

use Think\Model\ViewModel;

class BlogViewModel extends ViewModel {

	public $viewFields = array(
		'blog' => array('id', 'name', 'bref', 'package', 'content', 'author'),
		'person' => array('name' => 'author_name', 'headphoto' => 'author_headphoto', '_on' => 'blog.author=person.id'),
	);
}