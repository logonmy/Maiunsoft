<?php

namespace Portal\Controller;

class ServiceController extends PortalController {

	public function index($gid=0)
	{
		$this->articleList = M('article')->where('group_id=%d',$gid)->getField('id,title,bref,image');
		
		$this->display('list');
	}


	//业务咨询
	public function consult(){
		$this->display('consult');
	}
	
	//业务开发
	public function dev(){
		$this->display('dev');
	}
	
	//业务运维
	public function maintenance(){
		$this->display('maintenance');
	}
	
	//业务培训
	public function train(){
		$this->display('train');
	}
}