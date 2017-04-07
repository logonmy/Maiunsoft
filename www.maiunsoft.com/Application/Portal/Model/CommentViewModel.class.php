<?php

namespace Portal\Model;

use Think\Model\ViewModel;

class CommentViewModel extends ViewModel {

	public $viewFields = array(
		'comment' => array('*'),
		'person' => array('name' => 'author_name', 'headphoto' => 'author_headphoto',
			'job' => 'author_job', '_on' => 'comment.author=person.id'),
	);
}