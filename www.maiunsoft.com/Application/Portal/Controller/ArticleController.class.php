<?php

namespace Portal\Controller;

class ArticleController extends PortalController {
	
	
	public function index($gid=0)
	{
		//标题
		$this->articleTitle = M('group')->where('id=%d',$gid)->select();
		
		$this->articleList = M('article')->where('group_id=%d',$gid)->getField('id,title,bref,image');
		
		$this->theme($this->_theme)->display('index');
		
		
		
	}
	
	
	//详情
	public function detail($id=''){
		$articleInfo = M('article')->where("id=%d",$id)->find();
		
		$group_id = 0;
		foreach($articleInfo as $k => $v){
			if($k == "group_id"){
				$group_id = $v;
			}
		}
		
		$this->articleTitle = M("group")->where('id=%d',intval($group_id))->select();
		$this->assign('articleInfo',$articleInfo);
		
		$this->theme($this->_theme)->display('detail');
		
		
	}
	

	
} // end contraoller