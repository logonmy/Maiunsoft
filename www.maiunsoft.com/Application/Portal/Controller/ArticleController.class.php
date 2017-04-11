<?php

namespace Portal\Controller;

class ArticleController extends PortalController {
	
	
	public function index($gid=0)
	{
		$this->articleList = M('article')->where('group_id=%d',$gid)->getField('id,title,bref,image');

		$this->theme($this->_theme)->display('list');
	}
	
	
	//合作动态
	public function detail($id=''){
		$this->articleInfo = M('article')->where('id=%d',$id)->find();
		$this->theme($this->_theme)->display('detail');
		
		
	}
	
	//业务洞察
	public function observe()
	{
		//数据库操作
		
		//模板渲染
		$this->theme($this->_theme)->display('observe');
	}

	
} // end contraoller