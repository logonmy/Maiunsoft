<?php

namespace Common\Service;

/**
 * 文件上传与管理服务
 */
class FileService extends CommonService
{
	private $_uploadRootPath = '';

	public function _initialize()
	{
		$this->_uploadRootPath = RootPath().'Uploads/';
	}

	/**
	 * 删除文件
	 * 
	 * @param string $path [文件路径]
	 */
	public function DeleteFile($path='')
	{
		if(empty($path)) return false;

		if(file_exists($path)){
			return unlink($path);
		}

		return false;
	}

	/**
	 * 删除文件夹
	 * 
	 * @param string $dir [文件夹]
	 */
	public function DeleteDirectory($dir='')
	{
		// 如果不是目录直接删除
		if(!is_dir($dir)){
			return unlink($dir);
		}

		if (!rmdir($dir)) {
			$fileList = scandir($dir);
			foreach ($fileList as $file) {
				if($file=='.'||$file=='..') continue;
				$cur = $dir . '/' .$file;
				if(is_dir($cur)){
					if(!$this->DeleteDirectory($cur))
						return false;
				}else{
					if(!unlink($cur))
						return false;
				}
			}

			closedir($dir);
			return rmdir($dir);
		}

		return true;
	}

	/**
	 * 上传图片
	 * 
	 * 	- 如果上传成功，返回文件保存路径和文件名
	 * 	- 如果上传失败，返回false
	 * 
	 * 	- 生成的缩略图与原图格式一致
	 *
	 * @param  string $name      上传标签名称 ex.<input type="file" name="myimg" />
	 * @param  string $path      [上传路径]
	 * @param  string $thumbnail [缩略图] ex. array('width'=>100,'height'=>300);
	 * @param  string $saveName  [保存名称]
	 * @return [type]            []
	 */
	public function UploadImage($uploadName='',$path='',$thumbnail='',$saveName='') {

		$uploadRootPath = RootPath().'/Uploads/';

		$saveName = empty($saveName) ? array('uniqid', '') : $saveName;
		$config = array(
			'maxSize' => 3145728,
			'rootPath' => $uploadRootPath,
			'savePath' => $path,
			'saveName' => $saveName,
			'replace' => true,
			'exts' => array('jpg', 'gif', 'png', 'jpeg'),
			'autoSub' => false,
		);

		$upload = new \Think\Upload($config); // 实例化上传类

		// 上传单个文件
		$info = $upload->uploadOne($_FILES[$uploadName]);

		// 上传失败
		if (!$info) {
			E('上传失败了，文件没有被成功上传至服务器，请检查是否存在权限问题');
			return false;
		}

		if(is_array($thumbnail)){
			$filePath = $uploadRootPath . $path . '/';
			$image = new \Think\Image();
			$image->open($filePath . $info['savename']);
			$thumb = $image->thumb($thumbnail['width'], $thumbnail['height'], \Think\Image::IMAGE_THUMB_FILLED);

			$file = $filePath . 's_' .$info['savename'];

			$thumb->save($file);
		}
		

		return $info['savename'];
	}

}