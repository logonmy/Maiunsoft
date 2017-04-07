<?php

namespace Common\Service;

/**
 *
 *
 * 
 */
class SliderService extends CommonService
{
	public $positions = array(
		1 => '首页幻灯片',
		2 => '首页推荐'
		);
	public function FindSliderList($type=1)
	{
		return M('slider')->where('type=%d',$type)->order('id DESC')->select();
	}

	public function FindSlider($sliderId=0)
	{
		if($sliderId<=0) return false;

		return M('slider')->where('id=%d',$sliderId)->find();
	}

	public function FindPosition($sliderId='')
	{
		if(empty($sliderId)) return 0;

		return M('slider')->where('id=%d',$sliderId)->getField('position');
	}

	public function SaveSlider($slider='',$sliderId='')
	{
		if(empty($slider)) return false;

		if(empty($sliderId)) return M('slider')->add($slider);

		return M('slider')->where('id=%d',$sliderId)->save($slider) ? $sliderId : 0;
	}

	public function UploadImage($id='',$fileName='')
	{
		if(empty($id)||empty($fileName)) return false;

		$ok = Service('File')->UploadImage($fileName,'slider/'.$id.'/');
		if(!$ok) return false;

		return M('slider')->where('id=%d',$id)->setField('image',$ok);
	}

	public function DeleteSlider($sliderId='')
	{
		if(empty($sliderId)) return false;

		// $imageDir = RootPath().'/Uploads/slider/'.$sliderId;
		// if(!Service('File')->DeleteDirectory($imageDir))
		// 	return false;

		return M('slider')->where('id=%d',$sliderId)->delete();
	}
}