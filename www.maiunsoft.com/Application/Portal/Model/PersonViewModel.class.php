<?php

namespace Portal\Model;

use Think\Model\ViewModel;

class PersonViewModel extends ViewModel {

	public $viewFields = array(
		'person' => array('*'),
		'file' => array('savename' => 'file_name', 'savepath' => 'file_path', '_on' => 'person.id=file.owner'),
	);
}