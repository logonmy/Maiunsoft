<?php

namespace Admin\Model;

/**
 * 用户模型类
 *
 * 本类完成如下功能
 * 		1. 查询分组、用户和功能列表
 *
 * @author Frank.Li <frank.li@maiunsoft.com>
 */
class DepartmentModel extends AdminModel {

	/**
	 * 自动验证条件
	 *
	 * @var array
	 */
	protected $_validate = array(
		array('name', '3,30', '名称长度为3-30个字符', self::MUST_VALIDATE, 'length'),
	);

	/**
	 * 查询部门列表
	 *
	 * @param integer $company_id  当前所在公司
	 */
	public function FindDepartmentList($company_id) {
		if (!empty($company_id)) {
			$map['company.company_id'] = $company_id;
		}

		$list = $this->where($map)->select();

		return $list;
	}

	/**
	 * 查询部门信息
	 *
	 * @param string  $id  部门id
	 */
	public function FindDepartmentInfo($id) {
		if (!empty($id)) {
			$map['_id'] = $id;
		}

		$info = $this->where($map)->find();

		return $info;
	}

}