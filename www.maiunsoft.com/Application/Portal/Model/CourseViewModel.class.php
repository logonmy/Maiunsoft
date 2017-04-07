<?php

namespace Portal\Model;

use Think\Model\ViewModel;

class CourseViewModel extends ViewModel {

	public $viewFields = array(
		'course' => array('*'),
		'file' => array('savename' => 'file_name', 'savepath' => 'file_path', '_on' => 'course.id=file.owner')
	);
}