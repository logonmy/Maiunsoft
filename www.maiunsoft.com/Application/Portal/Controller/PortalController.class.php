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
	
	//解决移动端数据绑定问题
	function _initialize(){
		$this->mdGroupList = M('group')->where('type=1')->order('id')->getField('id,name,type');
		
		$this->serviceGroupList = M('group')->where('type=2')->order('id')->getField('id,name,type');
	
		$this->caseGroupList = M('group')->where('type=3')->order('id')->getField('id,name,type');
		
		$this->_aboutGroupList = M('group')->where('type=5')->order('id')->getField('id,name,type');
	
	}
	

	public function _BuildMenu() {
		// 构造顶部菜单
		//
		//$groupService = Service('Group');

		$this->mdGroupList = M('group')->where('type=1')->order('id')->getField('id,name,type');
		$this->mdArticleList = M('article')->group('group_id')->order('group_id,create_time DESC')->getField('id,title,image,bref');


		// 服务菜单
		$serviceGroupList = M('group')->where('type=2')->order('id')->getField('id,name,type');
		
		//服务模块Icon的展示
		$serviceIcon = C("SERVICE_ICON");
		$newServiceIcon = array();
		
		foreach ($serviceGroupList as $key => $group) {
			
			$serviceArticleList = M('article')->where('group_id=%d',$key)->order('create_time DESC')->limit(5)->getField('id,title,bref,image');
			
			$newServiceIcon[$key] = current($serviceIcon);
			next($serviceIcon);
			
			$serviceGroupList[$key]['articleList'] = $serviceArticleList;
		}
		$this->assign('newServiceIcon',$newServiceIcon);
		$this->serviceGroupList = $serviceGroupList;


		// 客户案例菜单
		$caseGroupList = M('group')->where('type=3')->order('id')->getField('id,name,type');
		foreach ($caseGroupList as $key => $group) {
			$article = M('article')->where('group_id=%d',$key)->order('create_time DESC')->find();
			$caseGroupList[$key]['lastArticle'] = $article;
		}
		$this->caseGroupList = $caseGroupList;
		
		
		//-------------------招聘菜单----------------------//
		$jobTypeList = C('JOB_TYPES');
		$this->assign('jobTypeList',$jobTypeList);
		
		$this->partnerGroupList = M('group')->where('type=4')->order('id')->getField('id,name,type');
		
		//校园招聘任职要求
		$schoolNeed_speech = M('activity')->where('type=0')->order('create_time DESC')->find();
		$schoolNeed_speech['requirements'] = $schoolNeed_speech['agenda'];
		//校园招聘实习要求
		$schoolNeed_zero = M('job')->where('work_age=0')->order('update_time DESC')->find();
		//校园招聘应届生要求
		$schoolNeed_one = M('job')->where('work_age=1')->order('update_time DESC')->find();
		$this->schoolNeed = array($schoolNeed_speech,$schoolNeed_zero,$schoolNeed_one);
		
		//社会招聘任职要求
		$socialNeed = array();
		foreach($jobTypeList as $key=>$value){
			$socialNeed[] = M('job')->where('type=%d',$key)->order('update_time DESC')->find();
		}
		$this->assign('socialNeed',$socialNeed);
		
		
		//-------------------关于菜单----------------------//
		$_aboutGroupList = M('group')->where('type=5')->order('id')->getField('id,name,type');
		foreach($_aboutGroupList as $key => $group){
			$_aboutArticleList = M('article')->where('group_id=%d',$key)->order('create_time DESC')->find();
			$_aboutGroupList[$key]['lastArticle'] = $_aboutArticleList;
		};
		$this->assign('_aboutGroupList',$_aboutGroupList);
		
		
	}
	
}