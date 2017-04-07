<?php

namespace Admin\Controller;

/**
 * 新闻管理控制器
 *
 * @author Frank LI <frank.li@maiunsoft.com>
 */
class NewsController extends AdminController {

	/**
	 * 文章管理首页
	 * 
	 * @param  integer $gid [分类编号]
	 * @return [type]       [description]
	 */
	public function admin($gid = 0) {

		$this->groupList = Service('Group')->FindGroupList(3);

		$this->newsList = Service('Article')->FindArticleList($gid);
		$this->groupId = $gid;
		
        $this->pageGuid = array('icon' => 'file','title' => '文章信息管理','nav' => null);
		$this->display();
	}

	public function edit($id=0)
	{
		$news = Service('Article')->FindArticle($id);
		if(empty($news)){
			$result = array(
				'info' => '失败了',
				'status' => 0
				);
		}else{
			$result = array(
				'status' => 1,
				'info' => '成功了',
				'news' => $news
				);
		}

		$this->ajaxReturn($result);
	}


	public function save() {
		if (!IS_POST) {
			$this->error('您的操作方式不正确');
		}

		$news = array(
			'title' => I('post.news_title'),
			'bref' => I('post.news_bref'),
			'agroup_id' => I('post.news_group'),
			'source' => I('post.news_source'),
		);
		$id = I('post.news_id');
		if(!Service('Article')->SaveArticle($news,$id))
			$this->error('保存失败了，请重新操作');

		$this->success('保存成功了',U('news/admin?gid='.$news['group_id']));
	}

	public function save_content(){
		$news = array(
			'content' => I('post.news_content'),
		);
		$id = I('post.news_id');
		if(!Service('Article')->SaveArticle($news,$id))
			$this->error('保存失败了，请重新操作');

		$this->success('保存成功了',U('news/admin?gid='.$news['group_id']));
	}

	public function delete($id = '') {
		if (empty($id)) {
			$this->error('没有找到您要删除的信息，请确认');
		}

		$ok = Service('Article')->DeleteArticle($id);

		if ($ok) {
			$this->redirect('news/admin');
		} else {
			$this->error('删除失败');
		}

	}

	public function change_status($id = '') {
		if (empty($id)) {
			$this->error('没有找到您要修改的用户信息');
		}

		$status = M('agent')->where('id=%d', $id)->getField('status');

		$status = $status == 1 ? 0 : 1;

		$ok = M('agent')->where('id=%d', $id)->setField('status', $status);

		if ($ok) {
			$this->redirect('agent/admin');
		} else {
			$this->error('更新失败');
		}

	}
}