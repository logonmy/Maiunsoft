<?php

namespace Admin\Controller;

/**
 * 分组管理控制器
 *
 * @author Frank LI <frank.li@maiunsoft.com>
 */
class GroupController extends AdminController {
	public function admin($type=1)
	{
		$this->groupList = Service('Group')->FindGroupList($type);

		$this->pageGuid = array('icon' => 'file','title' => '文章分组管理','nav' => null);
		$this->typeList = C('GROUP_TYPES');
		$this->type = $type;
		$this->display('admin');
	}

	public function single($id='')
	{
		$group = Service('Group')->FindGroup($id);

		$this->ajaxReturn($group);
	}

	public function save()
	{
		$group = array(
			'name' => I('post.group_name'),
			'bref' => I('post.group_bref'),
			'type' => I('post.group_type'),
			);

		$groupId = I('post.group_id');
		if(!Service('Group')->SaveGroup($group,$groupId))
			$this->error('保存失败');

		$this->success('保存成功',U('Group/admin?type='.$group['type']));
	}

	public function delete($id='')
	{
		if(empty($id)) $this->error('请指定要删除的信息');

		if(!Service('Group')->DeleteGroup($id))
			$this->error('删除失败');

		$this->success('删除成功',U('Group/admin'));
	}

	public function image()
	{
		$groupId = I('post.group_id');
		$groupType = I('post.group_type');
		$imageName = Service('File')->UploadImage('group_image','group/');

		if(!$imageName) $this->error('图片上传失败');

		$group['image'] = $imageName;
		if(!Service('Group')->SaveGroup($group,$groupId))
			$this->error('图片上传成功，但是写入数据库失败');

		$this->success('图片更新成功',U('group/admin?type='.$groupType));
	}
}