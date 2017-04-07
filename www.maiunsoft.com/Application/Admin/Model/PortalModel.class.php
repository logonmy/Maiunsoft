<?php

namespace Admin\Model;

/**
 * 门户模型类
 *
 * 本类完成如下功能
 * 		1. 查询分组、应用和功能列表
 *
 * @author Frank.Li <frank.li@maiunsoft.com>
 */
class PortalModel extends AdminModel {

	/**
	 * 根据公司编号查询相应的门户信息
	 *
	 * @param string $cid 公司编号
	 */
	public function FindPortalList($cid = '') {
		if (empty($cid)) {
			return false;
		}

		$map['company_id'] = $cid;
		$portalList = $this->where($map)->select();

		foreach ($portalList as $key => $portal) {
			$portalList[$key]['status_name'] = $portal['status'] == 1 ? '打开' : '关闭';
		}

		return $portalList;
	}

	public function FindPortal($id = '') {
		$map['_id'] = $id;
		return $this->where($map)->find();
	}
}