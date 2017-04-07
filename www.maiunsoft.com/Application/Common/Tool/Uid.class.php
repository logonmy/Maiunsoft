<?php

namespace Common\Tool;

class Uid {

	public static function generate() {
		// 这里生成的编号统一为11位长度的字符串，全部为大写
		//

		// 获取当前时间，不格式化
		$time = time();

		// 两个1-9之间的随机数
		$rand_number = mt_rand(1, 9);

		$id = $time.$rand_number;

		return $id;
	}

	public static function get_unixtime($uid) {

		// 提取时间部分
		return substr($uid, 0, 10);
	}

	public static function get_cn_datetime($uid) {
		$unixtime = Uid::get_unixtime($uid);
		return date('Y年m月d日 H时i分', $unixtime);
	}

	public static function get_datetime($uid) {
		$unixtime = Uid::get_unixtime($uid);
		return date('Y-m-d H:i:s', $unixtime);
	}

	public static function get_cn_date($uid) {
		$unixtime = Uid::get_unixtime($uid);
		return date('Y年m月d日', $unixtime);
	}

	public static function get_date($uid) {
		$unixtime = Uid::get_unixtime($uid);
		return date('Y-m-d', $unixtime);
	}

	public function get_year($uid = '') {
		$unixtime = Uid::get_unixtime($uid);
		return date('Y', $unixtime);
	}
}