<?php
namespace Admin\Model;

use Common\Model\CommonModel;

class AdminModel extends CommonModel {

	const STATUS_ACTIVE = 1; // 激活
	const STATUS_CLOSE = 0; // 关闭

	/**
	 * 关键词验证
	 *
	 * @param  string $keywords [description]
	 * @return [type]           [description]
	 */
	public function keywords_check($keywords) {
		$kw_list = is_array($keywords) ? $keywords : explode(',', $keywords);

		foreach ($kw_list as $kw) {
			$len = strlen($kw);
			if ($len > 10 || $len < 2) {
				return false;
			}

		}

		return true;
	}

}