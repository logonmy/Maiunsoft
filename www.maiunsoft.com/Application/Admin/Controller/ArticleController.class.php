<?php

namespace Admin\Controller;

/**
 * 文章管理控制器
 *
 * @author Frank LI <frank.li@maiunsoft.com>
 */
class ArticleController extends AdminController {

	/**
	 * 文章管理首页
	 * 
	 * @param  integer $gid [分类编号]
	 * @return [type]       [description]
	 */
	public function admin($type=1,$gid = 0) {

		$AS = Service('Article');
		$groupService = Service("Group");

		$this->typeName = C('GROUP_TYPES')[$type];

		$this->groupList = $groupService->FindGroupList($type);
		if(empty($this->groupList)) $this->error('对不起，没有分组数据，请首先添加分组数据');

		if($gid<=0) $gid = current($this->groupList)['id'];
		$this->articleList = $AS->FindArticleList($gid);
		$this->type = $type;
		$this->groupId = $gid;
        $this->pageGuid = array('icon' => 'file','title' => $this->typeName.'信息管理','nav' => null);
		$this->display('admin');
	}

	public function group_list($type=1)
	{
		$groupList = Service('Article')->FindGroupList($type);

		$this->ajaxReturn($groupList);
	}

	public function edit($id=0)
	{
		$article = Service('Article')->FindArticle($id);

		$this->ajaxReturn($article);
	}

	public function edit_content($id='')
	{
		$this->article = Service('Article')->FindArticle($id);

		$this->pageGuid = array('icon' => 'file','title' => '文章内容管理：'.$this->article['title'],'nav' => null);
		$this->display('edit-content');
	}


	public function save() {
		if (!IS_POST) {
			$this->error('您的操作方式不正确');
		}

		$article = array(
			'title' => I('post.article_title'),
			'bref' => I('post.article_bref'),
			'author' => I('post.article_author'),
			'group_id' => I('post.article_group'),
			'reference' => I('post.article_reference'),
			'keywords' => I('post.article_keywords'),
		);
		$articleId = I('post.article_id');

		$articleType = I('post.article_type');

		$AS = Service('Article');
		if(!$AS->SaveArticle($article,$articleId))
			$this->error('保存失败了，请重新操作');

		$group = Service('Group')->FindGroup($article['group_id']);

		$this->success('保存成功了',U('article/admin',array('type'=>$articleType,'gid'=>$article['group_id'])));
	}

	public function save_content(){
		$article = array(
			'content' => I('post.article_content','','htmlspecialchars'),
		);
		$articleId = I('post.article_id');
		$articleType = I('post.article_type');
		$articleGroup = I('post.article_group');
		if(!Service('Article')->SaveArticle($article,$id))
			$this->error('保存失败了，请重新操作');

		$this->success('保存成功了',U('article/admin',array('type'=>$articleType,'gid'=>$articleGroup)));
	}

	public function delete($id = '') {
		if (empty($id)) {
			$this->error('没有找到您要删除的信息，请确认');
		}

		$ok = Service('Article')->DeleteArticle($id);

		if ($ok) {
			$this->redirect('article/admin');
		} else {
			$this->error('删除失败');
		}

	}

	public function image()
	{
		$articleId = I('post.article_id');
		$articleType = I('post.article_type');
		$imageName = Service('File')->UploadImage('article_image','article/');

		if(!$imageName) $this->error('图片上传失败');

		$article['image'] = $imageName;
		if(!Service('Article')->SaveArticle($article,$articleId))
			$this->error('图片上传成功，但是写入数据库失败');

		$this->success('图片更新成功',U('article/admin?type='.$articleType));
	}
}