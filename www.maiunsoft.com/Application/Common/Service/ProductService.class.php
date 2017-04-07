<?php 

namespace Common\Service;

/**
 *
 * 
 */
class ProductService extends CommonService
{
	public function FindProductList()
	{
		return M('Product')->order('top DESC')->getField('id,name,short_name,title,bref,thumbnail');
	}

	public function FindProduct($id='')
	{
		if(empty($id)) return false;

		return M('product')->where('id=%d',$id)->find();
	}

	/**
	 * 将制定的产品置顶显示
	 * 
	 * @param string $productId [产品编号]
	 */
	public function MakeTop($productId='')
	{
		if(empty($productId)) return false;

		return M('product')->where('id=%d',$productId)->setField('top',date('Y-m-d H:i:s',time()));
	}

	public function SaveProduct($product=array(),$productId=0)
	{
		if(empty($product)) return false;

		$Model = M('product');

		if(empty($productId)||$productId<=0){
			return $Model->add($product);
		}

		return $Model->where('id=%d',$productId)->save($product);
	}

	public function DeleteProduct($id=0)
	{
		if($id<=0) return false;

		// 首先删除图片
		$imageDir = RootPath().'/Uploads/product/'.$id;
		if(!Service('File')->DeleteDirectory($imageDir))
			return false;

		return M('product')->where('id=%d',$id)->delete();
	}

	public function AddImage($id='',$imageName='')
	{
		$images = M('product')->where('id=%d',$id)->getField('images');

		if(empty($images))
			$newImages = $imageName;
		else{
			$newImages = $images.'|'.$imageName;
		}

		return M('product')->where('id=%d',$id)->setField('images',$newImages);
	}

	public function DeleteImage($id='',$imageName='')
	{
		// 首先删除文件
		$imagePath = RootPath().'/Uploads/product/'.$id.'/'.$imageName;
		if(!Service('File')->DeleteFile($imagePath))
			return false;

		$images = M('product')->where('id=%d',$id)->getField('images');

		if(empty($images))
			return true;
		else{
			$newImages = explode('|', $images);
			foreach ($newImages as $key => $image) {
				if(trim($image)!=trim($imageName))
					continue;

				unset($newImages[$key]);
			}

			$images = implode('|', $newImages);
		}

		return M('product')->where('id=%d',$id)->setField('images',$images);
	}

	/**********************************************************************************
	 *
	 * 参数管理
	 * 
	 **********************************************************************************/
	public function FindParamList($productId=0)
	{
		if($productId<=0) return false;

		return M('product_param')->where('product_id=%d',$productId)->order('name')->select();
	}

	public function FindParam($paramId=0)
	{
		if($paramId<=0) return false;

		return M('product_param')->where('id=%d',$paramId)->find();
	}

	public function FindParamProductId($paramId=0)
	{
		if($paramId<=0) return false;

		return M('product_param')->where('id=%d',$paramId)->getField('product_id');
	}

	public function SaveParam($param=array(),$paramId=0)
	{
		if(empty($param)) return false;

		if($paramId<=0) return M('product_param')->add($param);

		return M('product_param')->where('id=%d',$paramId)->save($param);
	}

	public function DeleteParam($paramId=0)
	{
		if($paramId<=0) return false;

		return M('product_param')->where('id=%d',$paramId)->delete();
	}

	/**********************************************************************************
	 *
	 * 版本管理
	 * 
	 **********************************************************************************/
	public function FindVersionList($productId=0)
	{
		if($productId<=0) return false;

		return M('product_version')->where('product_id=%d',$productId)->order('version DESC')->select();
	}

	public function FindVersion($versionId=0)
	{
		if($versionId<=0) return false;

		return M('product_version')->where('id=%d',$versionId)->find();
	}

	public function FindVersionProductId($versionId=0)
	{
		if($versionId<=0) return false;

		return M('product_version')->where('id=%d',$versionId)->getField('product_id');
	}

	public function SaveVersion($version=array(),$versionId=0)
	{
		if(empty($version)) return false;

		if($versionId<=0) return M('product_version')->add($version);

		return M('product_version')->where('id=%d',$versionId)->save($version);
	}

	public function DeleteVersion($versionId=0)
	{
		if($versionId<=0) return false;

		return M('product_version')->where('id=%d',$versionId)->delete();
	}
}