<?php
namespace Portal\Controller;

class CustomerController extends PortalController {
	
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