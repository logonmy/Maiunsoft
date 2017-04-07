<?php

class Types{

	//
	////
	//
	public static $solution_types = array (
        1001 => array('name'='行业方案','ename'='INDUSTRY_SOLUTION'),
        1002 => array('name'='功能方案','ename'='FUNCTION_SOLUTION'),
        );

	public static $article_types = array(
			'SOLUTION'=>array('name'=>'方案','childs'=>array(
					'LOGISTISTICS'=>'物流行业',
					''
				),

			'KNOWLEDGE'=>'知识',
			'CASES'=>'案例',
			'PARTNER'
		);
}