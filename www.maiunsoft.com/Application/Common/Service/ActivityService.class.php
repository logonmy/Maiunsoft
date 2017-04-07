<?php 

namespace Common\Service;

/**
 *
 * 活动服务
 */
class ActivityService extends CommonService
{

	public function FindActivityList($type=1)
	{
		$map['type'] = $type;

		return M('activity')->where($map)->order('start_time DESC')->select();
	}

	public function FindActivity($activityId=0)
	{
		return M('activity')->where('id=%d',$activityId)->find();
	}

	
	public function SaveActivity($newActivity=null,$activityId=0)
	{
		if(!$newActivity) return false;

		if($activityId>0){
			unset($newActivity['id']);
			return M('activity')->where('id=%d',$activityId)->save($newActivity);
		}

		return M('activity')->add($newActivity);
	}

	public function DeleteActivity($activityId=0)
	{
		return M('activity')->where('id=%d',$activityId)->delete();
	}
}