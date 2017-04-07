<?php

namespace Portal\Model;

use Think\Model\ViewModel;

class CaseViewModel extends ViewModel {

	public $viewFields = array(
		'case' => array('id,name,summary,package'),
		'company' => array('name' => 'customer_name', 'logo' => 'customer_logo', '_on' => 'case.customer=company.id'),
	);
}