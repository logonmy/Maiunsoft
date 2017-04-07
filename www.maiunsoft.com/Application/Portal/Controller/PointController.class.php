<?php

namespace Portal\Controller;

class PointController extends PortalController {

	public function index($gid=0,$id=0)
	{
		$this->articleList = M('article')->where('group_id=%d',$gid)->getField('id,title,bref,image');
		
		$this->articleInfo = M('article')->where('id=%d',$id)->find();
	
		$this->display('list');
	}

}