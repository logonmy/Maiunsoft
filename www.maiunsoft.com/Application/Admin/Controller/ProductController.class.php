<?php

namespace Admin\Controller;

/**
 *
 * 
 */
class ProductController extends AdminController
{
	public function admin()
	{
		$this->productList = Service('Product')->FindProductList();

		$this->pageGuid = array('icon' => 'square','title' => '产品信息管理','nav' => null);
		$this->display('admin');
	}

	public function product($id='')
	{
		$product = Service('Product')->FindProduct($id);

		$this->ajaxReturn($product);
	}

	public function description($id='')
	{
		$this->product = Service('Product')->FindProduct($id);
		$this->productList = Service('Product')->FindProductList();
		$this->productId = $this->product['id'];
		$this->pageGuid = array('icon' => 'square','title' => '产品描述管理','nav' => null);
		$this->display();
	}

	public function save()
	{
		$product = array(
			'name' => I('post.product_name'),
			'short_name' => I('post.product_shortname'),
			'title' => I('post.product_title'),
			'bref' => I('post.product_bref'),
			'url' => I('post.product_url'),
			);

		$productId = I('post.product_id');

		if(!Service('Product')->SaveProduct($product,$productId))
			$this->error('操作失败');

		$this->success('成功了',U('product/admin'));
	}

	public function delete($id='')
	{
		if(!Service('Product')->DeleteProduct($id))
			$this->error('删除失败');

		$this->success('删除成功了',U('product/admin'));
	}

	/**********************************************************************************
	 *
	 * 参数管理
	 * 
	 **********************************************************************************/

	public function param_admin($id='')
	{
		if(empty($id)){
			$id = M('product')->getField('id',false);
		}

		$this->productList = Service('Product')->FindProductList();
		$this->paramList = Service('Product')->FindParamList($id);

		$this->productId = $id;

		$this->pageGuid = array('icon' => 'square','title' => '产品参数管理','nav' => null);
		$this->display('param-admin');
	}

	public function save_param()
	{
		$param = array(
			'name' => I('post.param_name'),
			'value' => I('post.param_value'),
			'product_id' => I('post.param_product'),
			);

		$paramId = I('post.param_id');

		if(!Service('Product')->SaveParam($param,$paramId))
			$this->error('操作失败');

		$this->success('成功了',U('product/param_admin?id='.$param['product_id']));
	}

	public function delete_param($id='')
	{
		if(empty($id)) $this->error('删除失败');

		$productId = Service('Product')->FindParamProductId($id);
		if(!$productId) $this->error('删除失败');

		if(!Service('Product')->DeleteParam($id))
			$this->error('删除失败');

		$this->success('删除成功',U('product/param_admin?id='.$productId));
	}

	/**********************************************************************************
	 *
	 * 版本管理
	 * 
	 **********************************************************************************/

	public function version_admin($id='')
	{
		if(empty($id)){
			$id = M('product_version')->getField('id',false);
		}

		$this->productList = Service('Product')->FindProductList();
		$this->versionList = Service('Product')->FindVersionList($id);

		$this->productId = $id;

		$this->pageGuid = array('icon' => 'square','title' => '产品版本管理','nav' => null);
		$this->display('version-admin');
	}

	public function save_version()
	{
		$version = array(
			'version' => I('post.version_number'),
			'content' => I('post.version_content'),
			'product_id' => I('post.version_product'),
			'update_date' => date('Y-m-d',time())
			);

		$versionId = I('post.version_id');

		if(!Service('Product')->SaveVersion($version,$versionId))
			$this->error('操作失败');

		$this->success('成功了',U('product/version_admin?id='.$version['product_id']));
	}

	public function delete_version($id='')
	{
		if(empty($id)) $this->error('删除失败');

		$productId = Service('Product')->FindVersionProductId($id);
		if(!$productId) $this->error('删除失败');

		if(!Service('Product')->DeleteVersion($id))
			$this->error('删除失败');

		$this->success('删除成功',U('product/version_admin?id='.$productId));
	}

	/**********************************************************************************
	 *
	 * 图片管理
	 * 
	 **********************************************************************************/
	public function images_admin($id='')
	{
		$PS = Service('Product');
		$this->productList = $PS->FindProductList();

		if(empty($id)){
			$id = current($this->productList)['id'];
		}

		

		$product = $PS->FindProduct($id);

		if(empty($product)) $this->error('没有找到该产品');

		if(!empty($product['images'])){
			$this->imageList = explode('|', $product['images']);
		}
		$this->productId = $product['id'];
		$this->productThumbnail = $product['thumbnail'];
		$this->pageGuid = array('icon' => 'square','title' => '产品图片管理','nav' => null);
		$this->display('images-admin');
	}

	public function upload_image()
	{
		$productId = I('post.product_id');
		if(empty($productId)) $this->error('请指定要上传的产品');

		$path = 'product/'.$productId.'/';
		$fileName = Service('File')->UploadImage('product_image',$path);

		if(!$fileName) $this->error('对不起，上传失败');

		if(!Service('Product')->AddImage($productId,$fileName))
			$this->error('上传失败');

		$this->success('上传成功了',U('product/images_admin?id='.$productId));
	}

	public function cover($id='',$image='')
	{
		if(empty($id)||empty($image))
			$this->error('请设定正确的参数');

		if(!M('product')->where('id=%d',$id)->setField('thumbnail',$image))
			$this->error('设定失败');

		$this->success('设定成功了',U('product/images_admin?id='.$id));
	}

	public function delete_image($id='',$image='')
	{
		if(empty($id)||empty($image))
			$this->error('请设定正确的参数');

		if(!Service('Product')->DeleteImage($id,$image))
			$this->error('删除失败');

		$this->success('删除成功',U('product/images_admin?id='.$id));
	}

}