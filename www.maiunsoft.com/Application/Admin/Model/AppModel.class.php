<?php

namespace Admin\Model;

/**
 * 应用模型类
 *
 * 本类完成如下功能
 * 		1. 查询分组、应用和功能列表
 *
 * @author Frank.Li <frank.li@maiunsoft.com>
 */
class AppModel extends AdminModel {

	/**
	 * 根据公司编号查询相应的权限信息
	 *
	 * @param string $cid 公司编号
	 */
	public function FindAppList($apps) {
		if (empty($apps)) {
			return false;
		}

		$n = 0;
		foreach ($apps as $app => $time) {
			$map['_id'] = $app;
			$app_list[] = $this->where($map)->find();
			$app_list[$n]['join_time'] = $time;
			$n++;
		}

		return $app_list;
	}
}