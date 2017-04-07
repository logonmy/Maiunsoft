<?php

namespace Admin\Model;

/**
 * 岗位模型类
 *
 *
 * @author Frank.Li <frank.li@maiunsoft.com>
 */
class JobModel extends AdminModel {

	/**
	 * 自动验证条件
	 *
	 * @var array
	 */
	protected $_validate = array(
		array('name', '3,30', '名称长度为3-30个字符', self::MUST_VALIDATE, 'length'),
	);

	/**
	 * 查询岗位列表
	 *
	 * @param integer $company_id  当前所在公司
	 */
	public function FindJobList($company_id) {
		if (!empty($company_id)) {
			$map['company.company_id'] = $company_id;
		}

		$list = $this->where($map)->select();

		return $list;
	}

	/**
	 * 查询岗位信息
	 *
	 * @param string  $id  岗位id
	 */
	public function FindJobInfo($id) {
		if (!empty($id)) {
			$map['_id'] = $id;
		}

		$info = $this->where($map)->find();

		return $info;
	}

}