<?php 

namespace Common\Service;

/**
 *
 * 招聘服务
 */
class JobService extends CommonService
{

	public function FindJobList($type=1,$workAge=0)
	{
		$map['type'] = $type;
		$map['work_age'] = $workAge;

		return M('job')->where($map)->order('urgency DESC,update_time DESC')->select();
	}

	public function FindJob($jobId=0)
	{
		return M('job')->where('id=%d',$jobId)->find();
	}

	
	public function SaveJob($newJob=null,$jobId=0)
	{
		if(!$newJob) return false;

		if($jobId>0){
			unset($newJob['id']);
			return M('job')->where('id=%d',$jobId)->save($newJob);
		}

		return M('job')->add($newJob);
	}

	public function DeleteJob($jobId=0)
	{
		return M('job')->where('id=%d',$jobId)->delete();
	}
}