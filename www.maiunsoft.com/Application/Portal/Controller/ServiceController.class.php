<?php

namespace Portal\Controller;

class ServiceController extends PortalController {

	public function index($gid=0)
	{
		$this->articleList = M('article')->where('group_id=%d',$gid)->getField('id,title,bref,image');
		
		$this->display('list');
	}

}