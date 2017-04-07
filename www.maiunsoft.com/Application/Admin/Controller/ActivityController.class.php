<?php

namespace Admin\Controller;

/**
 * 工作管理控制器
 *
 * @author Frank LI <frank.li@maiunsoft.com>
 */
class ActivityController extends AdminController {

	public function __construct() {
		parent::__construct();
		$this->activityService = Service('Activity');
	}

	public function admin($type=1)
	{
		$this->activityList = $this->activityService->FindactivityList($type);

		$this->cityList = C('CITYS');
		$this->activityTypeId = $type;
		$this->activityTypeName = C('ACTIVITY_TYPES')[$type];
		$this->pageGuid = array('icon' => 'list','title' => $this->activityTypeName.'活动管理','nav' => null);
		$this->display();
	}

	public function single($id=0)
	{
		$activity = $this->activityService->Findactivity($id);

		$this->ajaxReturn($activity);
	}

	public function save()
	{
		$activity = array(
			'name' => I('post.activity_name'),
			'type' => I('post.activity_type'),
			'start_time' => I('post.activity_starttime'),
			'end_time' => I('post.activity_endtime'),
			'city' => I('post.activity_city'),
			'address' => I('post.activity_address'),
			'agenda' => I('post.activity_agenda'),
			'contact_name' => I('post.activity_contactname'),
			'contact_number' => I('post.activity_contactnumber'),
			'create_time' => date('Y-m-d H:i:s',time()),
			);

		$activityId = I('post.activity_id');


		if(!$this->activityService->Saveactivity($activity,$activityId)){
			$this->error('活动信息保存失败');
			return;
		}

		$this->success('活动信息保存成功',U('activity/admin?type='.$activity['type']));
	}

	public function delete($id=0,$type=0)
	{
		if(!$this->activityService->Deleteactivity($id)){
			$this->error('活动信息删除失败');
		}

		$this->success('活动信息删除成功',U('activity/admin?type='.$type));
	}
}