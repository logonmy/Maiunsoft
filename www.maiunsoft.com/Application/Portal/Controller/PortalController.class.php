<?php

namespace Portal\Controller;

class PortalController extends \Common\Controller\CommonController {

	public $_theme = 'Pc';
	public function __construct() {

		parent::__construct();

		Vendor('MobileDetect.Mobile_Detect');
		$MD = new \Mobile_Detect();
		if($MD->isMobile()){
			$this->_theme = 'Mobile';
		}else if($MD->isTablet()){
			$this->_theme = 'Mobile';
		}else{
			$isIE = $MD->version('IE');
			if(!empty($isIE)&&$isIE<9)
				$this->error('对不起，你的浏览器版本过旧','http://static.maiunsoft.com/updatebrowser');
			$this->_BuildMenu();
		}	
	}

	public function _BuildMenu() {

		// 构造顶部菜单
		//
		$groupService = Service('Group');

		$this->mdGroupList = M('group')->where('type=1')->order('id')->getField('id,name,type');
		
		$this->mdArticleList = M('article')->group('group_id')->order('group_id,create_time DESC')->getField('id,title,image,bref');


		// 服务菜单
		$serviceGroupList = M('group')->where('type=2')->order('id')->getField('id,name,type');
		foreach ($serviceGroupList as $key => $group) {
			
			$serviceArticleList = M('article')->where('group_id=%d',$key)->order('create_time DESC')->limit(5)->getField('id,title,bref,image');

			$serviceGroupList[$key]['articleList'] = $serviceArticleList;
		}

		$this->serviceGroupList = $serviceGroupList;


		// 客户案例菜单
		$caseGroupList = M('group')->where('type=3')->order('id')->getField('id,name,type');
		foreach ($caseGroupList as $key => $group) {
			$article = M('article')->where('group_id=%d',$key)->order('create_time DESC')->find();
			$caseGroupList[$key]['lastArticle'] = $article;
		}
		$this->caseGroupList = $caseGroupList;

		$this->jobTypeList = C('JOB_TYPES');

		$this->partnerGroupList = M('group')->where('type=4')->order('id')->getField('id,name,type');
	}
}