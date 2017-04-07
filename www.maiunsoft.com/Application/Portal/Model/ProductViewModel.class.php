<?php

namespace Portal\Model;

use Think\Model\ViewModel;

class ProductViewModel extends ViewModel {

	public $viewFields = array(
		'product' => array('id', 'name', 'bref', 'cate', 'content'),
		'file' => array('savename' => 'file_name', 'savepath' => 'file_path', '_on' => 'product.id=file.owner')
	);
}