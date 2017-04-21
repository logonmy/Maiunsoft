<?php

namespace Portal\Controller;

class JobController extends PortalController {
	
	//社会招聘
	public function social($type=1,$city=1){
		
		
		//-------------招聘类型----------------//
		$this->socialList = C('JOB_TYPES');
		$this->jobType = $type;
		
		//市场类数据绑定
		$this->bazzarList = M("job")->where("type=1 AND work_age=2")->order("update_time,urgency DESC")->select();
		//研发类数据绑定
		$this->developmentList = M("job")->where("type=2 AND work_age=2")->order("update_time,urgency DESC")->select();
		//业务类数据绑定
		$this->operationList = M("job")->where("type=3 AND work_age=2")->order("update_time,urgency DESC")->select();
		//职能类数据绑定
		$this->functionList = M("job")->where("type=4 AND work_age=2")->order("update_time,urgency DESC")->select();
		//管理类数据绑定
		$this->manageList = M("job")->where("type=5 AND work_age=2")->order("update_time,urgency DESC")->select();
		
		
		
		
		//城市列表
		$this->jobCityList = C('CITYS');
		$this->jobCity = $city;
		
		//渲染模板
		$this->theme($this->_theme)->display('social');
	} 
	
	//校园招聘
	public function school($type=0,$city=1){

		//-------------招聘类型----------------//
		//校园宣讲
		$shcoolActivity = C("ACTIVITY_TYPES");
		//工作经验
		$jobAge = C("JOB_AGES");
		//创建一个数组，容纳校园宣讲、实习生、应届生
		$this->activityTypeList = array($shcoolActivity[1],$jobAge[0],$jobAge[1]);
		$this->activityType = $type;
		
		//城市列表
		$this->jobCityList = C('CITYS');
		$this->jobCity = $city;
		
		
		//校园宣讲数据绑定
		$this->schoolActivityList = M("activity")->where("type=0")->order("start_time DESC")->select();
		//实习生数据绑定
		$this->traineeList = M("job")->where("work_age=0")->order("update_time,urgency DESC")->select();
		//应届生数据绑定
		$this->graduateList = M("job")->where("work_age=1")->order("update_time,urgency DESC")->select();
			
		$this->theme($this->_theme)->display('school');
		//$this->ajaxReturn(array('data'=>$list,'status'=>1));
	} 
	
//	function action($type,$city){
//		setcookie($type,"type",time()+3600);
//		setcookie($city,"city",time()+3600);
//		
//		
//		
//		$manageList = M("job")->where("work_age=2 AND type=%d AND work_city=%d",$type,$city)->order("update_time,urgency DESC")->select();
//		$this->ajaxReturn($manageList);
//	}
}