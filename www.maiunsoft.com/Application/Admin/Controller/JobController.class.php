<?php

namespace Admin\Controller;

/**
 * 工作管理控制器
 *
 * @author Frank LI <frank.li@maiunsoft.com>
 */
class JobController extends AdminController {

	public function __construct() {
		parent::__construct();
		$this->jobService = Service('Job');
	}

	public function admin($age=1,$type=1)
	{
		$this->jobList = $this->jobService->FindJobList($type,$age);

		$this->jobTypeList = C('JOB_TYPES');
		$this->jobTypeId = $type;
		$this->cityList = C('CITYS');
		$this->urgencyList = C('URGENCY_LEVEL');
		$this->ageName = C('JOB_AGES')[$age];
		$this->jobAgeId = $age;
		$this->jobTypeName = $this->jobTypeList[$type];

		$this->pageGuid = array('icon' => 'list','title' => $this->ageName.'招聘岗位管理','nav' => null);
		$this->display();
	}

	public function single($id=0)
	{
		$job = $this->jobService->FindJob($id);

		$this->ajaxReturn($job);
	}

	public function refresh($id=0,$type=0)
	{

		$job['update_time'] = date('Y-m-d H:i:s',time());

		if($id<=0||(!$this->jobService->SaveJob($job,$id))){
			$this->error('岗位刷新失败');
		}

		$this->success('岗位刷新成功',U('Job/admin?type='.$job['type']));

	}

	public function save()
	{
		$job = array(
			'name' => I('post.job_name'),
			'type' => I('post.job_type'),
			'work_content' => I('post.job_workcontent'),
			'work_city' => I('post.job_workcity'),
			'requirements' => I('post.job_requirements'),
			'salary_scope' => I('post.job_salaryscope'),
			'work_age' => I('post.job_workage'),
			'urgency' => I('post.job_urgency'),
			'update_time' => date('Y-m-d H:i:s',time()),
			);

		$jobId = I('post.job_id');

		if(!$this->jobService->SaveJob($job,$jobId)){
			$this->error('岗位信息保存失败');
			return;
		}

		$this->success('岗位信息保存成功',U('Job/admin?age='.$job['work_age'].'&type='.$job['type']));
	}

	public function delete($id=0,$type=0,$age=1)
	{
		if(!$this->jobService->DeleteJob($id)){
			$this->error('岗位信息删除失败');
		}

		$this->success('岗位信息删除成功',U('Job/admin?type='.$type.'&age='.$age));
	}
}