<?php

namespace Portal\Controller;

class ProductController extends PortalController {

	public function detail($id = 0) {

		// 如果没有指定编号，直接返回首页
		if (!isset($id)) {
			$this->display('index');
		}

		$PS = Service('Product');

		// 查询产品信息
		//
		$this->currentProduct = $PS->FindProduct($id);
		$this->paramList = $PS->FindParamList($id);
		$this->versionList = $PS->FindVersionList($id);

		$productList = $PS->FindProductList();
		$directoryList = array();
		foreach ($productList as $key => $pd) {
			$directoryList[] = array('name'=>$pd['name'],'url'=>__ROOT__.'/product/'.$pd['id'].'.html');
		}
		$this->directoryList = $directoryList;
	
		// 构造页面导航
		//
		$this->breadcrumbs = array(
			array('caption'=>'软件产品','url'=>__ROOT__.'/products'),
			array('caption'=>$this->currentProduct['name'])
			);

		// 页面seo
		//
		$this->_PageHeader = array(
			'title' => $this->currentProduct['name'],
			'keywords' => $this->currentProduct['keywords'],
			'description' => $this->currentProduct['bref']
			);

		$this->theme($this->_theme)->display();
	}

	public function index() {

		// 查询产品列表
		$this->productList = Service('Product')->FindProductList();

		// 构造页面导航
		//
		$this->breadcrumbs = array(array('caption'=>'软件产品'));

		// 页面seo
		//
		$this->_PageHeader = array(
			'title' => '软件产品',
			'keywords' => 'ThinkSales,ThinkMall,ThinkCRM,ThinkVote,WorkForce',
			'description' => '集成脉云软件所有的产品和服务信息'
			);

		$this->theme($this->_theme)->display();
	}

	public function subscribe()
	{
		$subscription = array(
			'product_id' => I('post.subscribe_product'),
			'product_name' => I('post.subscribe_product_name'),
			'subscriber_name' => I('post.subscriber_name'),
			'subscriber_mobile' => I('post.subscriber_mobile'),
			'create_time' => date('Y-m-d H:i:s',time())
		);

		if(M('product_subscription')->add($subscription)){
			$this->success('申请成功了，我们会在8小时内与您取得联系，请耐心等待！');
			return;
		}

		$this->error('失败了，请确认信息填写是否正确');
	}
} // end contraoller