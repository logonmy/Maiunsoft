<?php
namespace Portal\Controller;

class IndexController extends PortalController {

	public function index() {

		// 页面seo
		//
		$this->_PageHeader = array(
			'title' => '可信赖的内容管理解决方案提供商',
			'keywords' => '内容管理,文档管理,脉云智库,项目管理,业务流程管理,ECM,BPM,定制开发',
			'description' => '脉云软件（上海）有限公司简称脉云软件(或Maiunsoft)成立于2014年，以聚焦数字世界，服务现代生活为使命，致力于打造企业可信赖的内容管理解决方案服务商，我们为客户输出安全、便捷、高效的内容管理工具和方法论。'
			);

		// 获取banner图
		$this->bigSliderList = M('slider')->where('type=1')->order('id DESC')->select();

		$this->newsList = M('slider')->where('type=2')->order('id DESC')->select();

		$this->articleList = M('slider')->where('type=3')->order('id DESC')->select();
		
		//服务内容展示
		

		$this->theme($this->_theme)->display('index');
	}
}

?>