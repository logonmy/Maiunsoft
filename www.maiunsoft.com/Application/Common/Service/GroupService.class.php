<?php 

namespace Common\Service;

/**
 * 分组服务
 */
class GroupService extends CommonService
{
	/**
	 * 查找文章分组列表
	 * 
	 * @param string $type [description]
	 */
	public function FindGroupList($type=1)
	{
		return M('group')->where('type=%d',$type)->getField('id,name,bref');
	}

	public function FindGroup($id='')
	{
		if(empty($id)) return false;

		return M('group')->where('id=%d',$id)->find();
	}

	public function FindOneGroup($type=0)
	{
		if($type<=0) return M('group')->find();

		return M('group')->where('type=%d',$type)->find();
	}

	public function SaveGroup($group='',$groupId='')
	{
		if(empty($group)) return false;

		if(empty($groupId)) return M('group')->add($group);

		return M('group')->where('id=%d',$groupId)->save($group);
	}

	public function DeleteGroup($groupId='')
	{
		if(empty($groupId)) return false;

		return M('group')->where('id=%d',$groupId)->delete();
	}
}