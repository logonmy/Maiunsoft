<?php
namespace Portal\Controller;

class CustomerController extends PortalController {
	
	public function index($type=3,$gid=12){
		//查询案例模块分组
		$this->exampleGroupList = M("group")->where("type=3")->select();
		
		
		//根据group_id查询article数据,选择最近一条，用于页面展示
		$this->exampleArticle_new = M("article")->where("group_id=%d",$gid)->order("create_time DESC")->find();
		
		
		//根据group_id查询所有article数据
		$this->exampleArticleList = M("article")->where("group_id=%d",$gid)->order("create_time DESC")->select();
		foreach
		
		//渲染模板
		$this->theme($this->_theme)->display('index');
	}
	
	
	
	
	//咨询客户
	public function consult(){
		$this->theme($this->_theme)->display('consult');
	}
	
	//教育客户
	public function edu(){
		$this->theme($this->_theme)->display('edu');
	}
	
	//工程客户
	public function engineering(){
		$this->theme($this->_theme)->display('engineering');
	}
	
	//金融客户
	public function finance(){
		$this->theme($this->_theme)->display('finance');
	}
}
?>