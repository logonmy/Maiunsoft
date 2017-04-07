<?php 

namespace Admin\Controller;


/**
 *
 * 幻灯片管理
 * 
 */
class SliderController extends AdminController
{
	public function admin($type=0)
	{
		$SS = Service('Slider');

		$this->sliderList = $SS->FindSliderList($type);
		$this->sliderTypeId = $type;
		$this->sliderTypeName = C('SLIDER_TYPES')[$type];

		$this->pageGuid = array('icon' => 'desktop','title' => $this->sliderTypeName.'管理','nav' => null);
		$this->display();
	}

	public function edit($id=0)
	{
		$slider = Service('Slider')->FindSlider($id);

		$this->ajaxReturn($slider);
	}

	public function save()
	{
		$SS = Service('Slider');

		$slider = array(
			'title' => I('post.slider_title'),
			'url' => I('post.slider_url'),
			'type' => I('post.slider_type'),
			'bref' => I('post.slider_bref'),
			'create_time' => date('Y-m-d H:i:s',time()),
			);

		$sliderId = I('post.slider_id');

		$id = $SS->SaveSlider($slider,$sliderId);
		if(!$id) $this->error('保存失败了');

		$this->success('保存成功了',U('slider/admin?type='.$slider['type']));
	}

	public function image()
	{
		$sliderId = I('post.slider_id');
		$sliderType = I('post.slider_type');
		$imageName = Service('File')->UploadImage('slider_image','slider/');

		if(!$imageName) $this->error('图片上传失败');

		$slider['image'] = $imageName;
		if(!Service('Slider')->SaveSlider($slider,$sliderId))
			$this->error('图片上传成功，但是写入数据库失败');

		$this->success('图片更新成功',U('slider/admin?type='.$sliderType));
	}

	public function delete($id=0,$type=0)
	{

		if(!Service('Slider')->DeleteSlider($id))
			$this->error('删除失败了');

		$this->success('删除成功了',U('slider/admin?type='.$type));
	}

}