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
	
	
	//公司简介
	public function about($type = 5,$id = 19){
		
		//分组标题
		$this->aboutGroupList = M('group')->where("type=%d and id=%d",$type,$id)->order('id')->select();
		
		//该组内容
		$this->aboutContentList = M('article')->where('group_id=%d',$id)->getField('group_id,content,image');
		$this->group_id = $id;
		
		$this->theme($this->_theme)->display('about');
		
	}
	
	//服务网络
	public function service(){
		$this->theme($this->_theme)->display('service');
	}
	
	//合作伙伴
	public function cooperation(){
		$this->theme($this->_theme)->display('cooperation');
	}
	
	//企业文化
	public function culture(){
		$this->theme($this->_theme)->display('culture');
	}
	
	//可持续发展--移动端
	public function sustainable(){
		$this->theme($this->_theme)->display('sustainable');
	}
}