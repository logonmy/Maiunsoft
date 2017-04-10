<?php

namespace Portal\Controller;

class JobController extends PortalController {

	public function social_list($type=1,$city=1)
	{
		$this->jobList = M('job')->where('type=%d',$type)->select();

		$this->jobTypeList = C('JOB_TYPES');//获取/Common/config.php下的配置信息
		$this->jobType = $type;

		$this->jobCityList = C('CITYS');
		$this->jobCity = $city;

		$this->display('social-list');
	}

	public function fresh($type=1,$city=1)
	{
		# code...
	}
	
	
	//招聘信息
	public function detail(){
		$this->display('detail');
	} 
	
	//社会招聘
	public function social(){
		$this->theme($this->_theme)->display('social');
	} 
	
	//校园招聘
	public function school(){
		$this->theme($this->_theme)->display('school');
	} 
}