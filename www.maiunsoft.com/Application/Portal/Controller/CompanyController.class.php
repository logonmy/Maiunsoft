<?php 

namespace Portal\Controller;

/**
* 
*/
class CompanyController extends PortalController
{
	public function client()
	{
		$this->clientList = Service('Company')->FindAllCompanyList();

		// 构造页面导航
		//
		$this->breadcrumbs = array(array('caption'=>'典型客户'));

		$this->_PageHeader = array(
			'title' => '经典客户',
			'keywords' => '万利达、爱戈斯、戴福瑞、梅菲尔德',
			'description' => '脉云已经为100多家客户提供高质量的服务'
			);

		$this->theme($this->_theme)->display('index');
	}
	
	
	//公司简介
	public function about(){
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
	
	//可持续发展
	public function sustainable(){
		$this->theme($this->_theme)->display('sustainable');
	}
}