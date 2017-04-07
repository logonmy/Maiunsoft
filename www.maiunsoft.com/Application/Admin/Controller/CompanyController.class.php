<?php 

namespace Admin\Controller;

/**
 *
 * 企业信息管理控制器
 */
class CompanyController extends AdminController
{
	
	public function admin($type=1,$gid = 0) {

		$CS = Service('Company');

		$this->groupList = $CS->FindGroupList($type);
		if(empty($this->groupList)) $this->error('对不起，没有数据');

		if($gid<=0) $gid = current($this->groupList)['id'];
		$this->companyList = $CS->FindCompanyList($gid);
		$this->typeList = $CS->types;
		$this->type = $type;
		$this->groupId = $gid;
        $this->pageGuid = array('icon' => 'file','title' => '文章信息管理','nav' => null);
		$this->display('company-admin');
	}

	public function edit($id='')
	{
		$company = Service('Company')->FindCompany($id);

		$this->ajaxReturn($company);
	}

	/**
	 * 保存修改
	 * 
	 * @return [type] [description]
	 */
	public function save()
	{
		$company = array(
			'name' => I('post.company_name'),
			'website' => I('post.company_website'),
			'group_id' => I('post.company_group'),
			'bref' => I('post.company_bref'),
			);

		$companyId = I('post.company_id');

		$CS = Service('Company');
		$id = $CS->SaveCompany($company,$companyId);
		if(!$id) $this->error('更新失败');

		if(!empty($_FILES['company_logo']['tmp_name'])){
			if(!$CS->UploadLogo($id,'company_logo'))
				$this->error('LOGO上传失败');
		}

		$this->success('保存成功了',U('company/admin?gid='.$company['group_id']));
	}

	public function delete($id='')
	{
		$company = Service('Company')->FindCompany($id);
		if(!Service('Company')->DeleteCompany($id))
			$this->error('删除失败了');

		$this->success('删除成功了',U('company/admin?gid='.$company['group_id']));
	}

	/**********************************************************************************
	 *
	 * 分组管理
	 * 
	 **********************************************************************************/

	public function group_admin($type=1)
	{
		$CS = Service('Company');
		if($type<=0) $type = current($CS->types);

		$this->groupList = $CS->FindGroupList($type);

		$this->typeList = $CS->types;

		$this->type = $type;

		$this->pageGuid = array('icon' => 'square','title' => '企业分组管理','nav' => null);
		$this->display('group-admin');
	}

	public function group($id='')
	{
		$group = Service('Company')->FindGroup($id);

		$this->ajaxReturn($group);
	}

	public function save_group()
	{
		$group = array(
			'name' => I('post.group_name'),
			'bref' => I('post.group_bref'),
			'type' => I('post.group_type'),
			);

		$groupId = I('post.group_id');
		if(!Service('Company')->SaveGroup($group,$groupId))
			$this->error('保存失败');

		$this->success('保存成功',U('Company/group_admin'));
	}

	public function delete_group($id='')
	{
		if(empty($id)) $this->error('请指定要删除的信息');

		if(!Service('Company')->DeleteGroup($id))
			$this->error('删除失败');

		$this->success('删除成功',U('Company/group_admin'));
	}
}