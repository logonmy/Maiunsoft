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
class GroupModel extends AdminModel {

	/**
	 * 自动验证条件
	 *
	 * @var array
	 */
	protected $_validate = array(
		array('name', '3,30', '名称长度为3-30个字符', self::MUST_VALIDATE, 'length'),
		array('keywords', 'keywords_check',
			'关键词总长度不能超过300,每个关键词为2-10之间的词，并且用“,”隔开',
			self::VALUE_VALIDATE, 'callback'),
	);

	/**
	 * 查询分组列表
	 *
	 * @param integer $company_id  当前所在公司
	 */
	public function FindGroupList($company_id) {
		if (!empty($company_id)) {
			$map['company.company_id'] = $company_id;
		}

		$list = $this->where($map)->select();

		return $group_list = get_tree($list, 0);
	}

	/**
	 * 查询分组信息
	 *
	 * @param integer $id  编辑项id
	 */
	public function FindGroupInfo($id) {
		if (!empty($id)) {
			$map['_id'] = $id;
		}

		$info = $this->where($map)->find();

		return $info;
	}

	/**
	 * 查询分组下拉菜单
	 *
	 * @param integer $company_id  当前所在公司
	 * @param integer $id  编辑项id
	 */
	public function FindGroupDropList($company_id, $id) {
		if (!empty($company_id)) {
			//分类下拉菜单
			$serch['company.company_id'] = $company_id;

			$data = D('group')->where($serch)->select();

			//排除自己
			$data = other_data($data, $id);
		}
		//获得树状数组
		$group_list = get_tree($data, 0);

		return $group_list;
	}

}