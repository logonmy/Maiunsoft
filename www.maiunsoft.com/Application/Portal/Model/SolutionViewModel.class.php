<?php

namespace Portal\Model;

use Think\Model\ViewModel;

class SolutionViewModel extends ViewModel {

	public $viewFields = array(
		'solution' => array('id', 'name', 'bref', 'cate', 'content'),
		'file' => array('savename' => 'file_name', 'savepath' => 'file_path', '_on' => 'solution.id=file.owner')
	);
}