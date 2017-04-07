<?php

namespace Admin\Controller;

use Think\Controller;

class AdminController extends Controller {

	public function _initialize() {

		// header("Access-Control-Allow-Origin:*");

		$this->adminUser = session('_adminUser');
		if (empty($this->adminUser)) {
			$this->redirect('Login/index',array(),2,'请先登录，系统自动为您跳转至登录页面');
		}

		$this->menu_list = $this->load_menu_list();

	}



	/**
	 * 加载企业管理员菜单
	 *
	 * @param  integer $cid 企业管理员编号
	 * @return array 企业管理员菜单数组
	 */
	private function load_menu_list() {

		// $request = CONTROLLER_NAME . '/'.ACTION_NAME;
		
		$menuList = array(
			'index_admin' => array('title' => '首页广告管理', 'icon' => 'gift',
				'sub_menu_list' => array()),
			'article_admin' => array('title' => '文章信息管理', 'icon' => 'file',
				'sub_menu_list' => array(
					array('title' => '分组信息管理', 'icon'=>'file', 'name' => 'group/admin'),
				)),
			'activity_admin' => array('title' => '活动信息管理', 'icon' => 'file',
				'sub_menu_list' => array()),
			'job_admin' => array('title' => '招聘信息管理', 'icon' => 'file',
				'sub_menu_list' => array()),
			
		);

		$typeList = C('GROUP_TYPES');
		foreach ($typeList as $key => $type) {
			$menuList['article_admin']['sub_menu_list'][] = array('title'=>$type.'管理','icon'=>'file','name'=>'article/admin?type='.$key);
		}

		$jobAgeList = C('JOB_AGES');
		foreach ($jobAgeList as $key => $age) {
			$menuList['job_admin']['sub_menu_list'][] = array('title'=>$age.'岗位管理','icon'=>'file','name'=>'job/admin?age='.$key);
		}

		$activityTypeList = C('ACTIVITY_TYPES');
		foreach ($activityTypeList as $key => $type) {
			$menuList['activity_admin']['sub_menu_list'][] = array('title'=>$type.'活动管理','icon'=>'file','name'=>'activity/admin?type='.$key);
		}

		$sliderTypeList = C('SLIDER_TYPES');
		foreach ($sliderTypeList as $key => $type) {
			$menuList['index_admin']['sub_menu_list'][] = array('title'=>$type.'管理','icon'=>'file','name'=>'slider/admin?type='.$key);
		}

		return $menuList;
	}

	public function error($message='',$jumpUrl='',$ajax=false){
		$this->pageGuid = array('icon' => 'warning','title' => '错误提示','nav' => null);
		parent::error($message,$jumpUrl,$ajax);
	}

	public function success($message='',$jumpUrl='',$ajax=false)
	{
		$this->pageGuid = array('icon' => ' smile-o','title' => '成功提示','nav' => null);
		parent::error($message,$jumpUrl,$ajax);
	}
}