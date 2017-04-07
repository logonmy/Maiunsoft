<?php

namespace Admin\Model;

class AuthModel extends AdminModel {

	/**
	 * 根据公司编号查询相应的权限信息
	 *
	 * @param string $cid 公司编号
	 */
	public function FindAuthList($cid = '') {
		if (empty($cid)) {
			return false;
		}

		$map['company_id'] = $cid;
		return $this->where($map)->select();
	}

}