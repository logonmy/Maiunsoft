<?php

namespace Admin\Model;

class CompanyModel extends AdminModel {

	/**
	 * 自动验证条件
	 *
	 * @var array
	 */
	protected $_validate = array(
		array('name', '5,30', '名称长度为5-30个字符', self::MUST_VALIDATE, 'length'),
		array('title', '3,30', '名称长度为3-30个字符', self::MUST_VALIDATE, 'length'),
		array('keywords', 'keywords_check',
			'关键词总长度不能超过300,每个关键词为2-10之间的词，并且用“,”隔开',
			self::VALUE_VALIDATE, 'callback'),
		array('bref', '30,300', '摘要长度为30-300个字符', self::VALUE_VALIDATE, 'length'),
	);

	/**
	 * 查找企业账号
	 *
	 * @param string $code 企业号
	 */
	public function FindCompanyAccount($code = '') {
		if (empty($code)) {
			return false;
		}

		$map['code'] = $code;

		return $this->where($map)->field('_id,name,code,password')->find();
	}

	/**
	 * 查找当前企业列表
	 *
	 * @param string $company_id 企业号
	 */
	public function FindCompanyList($company_id) {
		if (!empty($company_id)) {
			$map['relation.friend_com'] = $company_id;
		}

		$list = $this->where($map)->select();

		return $list;
	}

	/**
	 * 查找当前企业信息
	 *
	 * @param string $company_id 企业号
	 */
	public function FindCompanyInfo($company_id) {
		if (!empty($company_id)) {
			$map['_id'] = $company_id;
		}

		$list = $this->where($map)->find();

		return $list;
	}
}