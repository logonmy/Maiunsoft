<?php 

namespace Common\Service;

/**
 *
 * 企业服务
 */
class CompanyService extends CommonService
{
	public $types = array(
		1 => '客户',
		2 => '伙伴',
		3 => '其他'
		);

	public function FindCompanyList($groupId=0)
	{
		if($groupId<=0) return false;

		return M('company')->where('group_id=%d',$groupId)->getField('id,name,bref,logo');
	}

	public function FindAllCompanyList()
	{
		return M('company')->getField('id,name,bref,logo');
	}

	public function FindCompany($companyId=0)
	{
		if($companyId<=0) return false;

		return M('company')->where('id=%d',$companyId)->find();
	}
	
	public function SaveCompany($company=array(),$companyId=0)
	{
		if(empty($company)) return false;

		if($companyId<=0) return M('company')->add($company);

		return M('company')->where('id=%d',$companyId)->save($company) ? $companyId : false;
	}

	public function DeleteCompany($companyId=0)
	{
		if($companyId<=0) return false;

		$imageDir = RootPath().'/Uploads/company/'.$companyId;
		if(!Service('File')->DeleteDirectory($imageDir))
			return false;

		return M('company')->where('id=%d',$companyId)->delete();
	}

	public function UploadLogo($id='',$fileName='')
	{
		if(empty($id)||empty($fileName)) return false;

		$ok = Service('File')->UploadImage($fileName,'company/'.$id.'/');
		if(!$ok) return false;

		return M('company')->where('id=%d',$id)->setField('logo',$ok);
	}

	/**********************************************************************************
	 *
	 * 分组管理
	 * 
	 **********************************************************************************/
	public function FindGroupList($type=0)
	{
		if($type<=0) return false;

		return M('company_group')->where('type=%d',$type)->getField('id,name,bref');
	}

	public function FindGroup($groupId=0)
	{
		if($groupId<=0) return false;

		return M('company_group')->where('id=%d',$groupId)->find();
	}

	public function SaveGroup($group=array(),$groupId=0)
	{
		if(empty($group)) return false;

		if($groupId<=0) return M('company_group')->add($group);

		return M('company_group')->where('id=%d',$groupId)->save($group);
	}

	public function DeleteGroup($groupId=0)
	{
		if($groupId<=0) return false;

		return M('company_group')->where('id=%d',$groupId)->delete();
	}
}