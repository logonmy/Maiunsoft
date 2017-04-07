<?php
namespace Portal\Controller;

class CustomerController extends PortalController {
	
	//咨询客户
	public function consult(){
		$this->display('consult');
	}
	
	//教育客户
	public function edu(){
		$this->display('edu');
	}
	
	//工程客户
	public function engineering(){
		$this->display('engineering');
	}
	
	//金融客户
	public function finance(){
		$this->display('finance');
	}
}
?>