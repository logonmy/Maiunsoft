<?php 

namespace Portal\Controller;

/**
* 
*/
class CompanyController extends PortalController
{
		
	public function index($type = 5,$id = 19){
		//分组标题
		$this->aboutGroupList = M('group')->where("type=%d and id=%d",$type,$id)->order('id')->select();
		
		//分组内容
		$this->aboutContentList = M('article')->where('group_id=%d',$id)->getField('group_id,content,image');
		$this->group_id = $id;
		
		$this->theme($this->_theme)->display('index');
	}
	
	
	
	public function contact(){
		$this->theme($this->_theme)->display('contact');
	}
	
}