<?php 

namespace Common\Service;

/**
 * 文章服务
 */
class ArticleService extends CommonService
{
	
	public function FindArticleList($groupId='')
	{
		if(empty($groupId)) return false;
		
		return M('article')->where('group_id=%d',$groupId)->order('id DESC')->getField('id,title,bref,reference,image,create_time');
	}

	/**
	 * 查找文章列表
	 * 
	 * @param integer $type  [分类]
	 * @param integer $count [数目]
	 */
	public function FindArticleListByType($type=1,$count=10)
	{
		return M()->table('tbl_article_group ag,tbl_article a')
				  ->where('ag.id=a.group_id AND ag.type=%d',$type)
				  ->field('ag.name as group_name,a.*')
				  ->select();
	}

	public function FindArticle($articleId='')
	{
		if(empty($articleId)) return null;

		return M('article')->where('id=%d',$articleId)->find();
	}

	public function SaveArticle($article='',$articleId)
	{
		if(empty($article)) return false;

		if(empty($articleId)){
			$article['create_time'] = date('Y-m-d H:i:s');
			return M('article')->add($article);
		} 

		return M('article')->where('id=%d',$articleId)->save($article);
	}

	public function DeleteArticle($articleId='')
	{
		if(empty($articleId)) return false;

		return M('article')->where('id=%d',$articleId)->delete();
	}

	public function UploadThumbnail($id='',$fileName='')
	{
		if(empty($id)||empty($fileName)) return false;

		$ok = Service('File')->UploadImage($fileName,'article/'.$id.'/',null,'thumbnail');
		if(!$ok) return false;

		return M('article')->where('id=%d',$id)->setField('thumbnail',$ok);
	}

	/**
	 * 查询获得一个分组和文章构成的二位数组
	 * 
	 * @param integer $type             [类型]
	 * @param integer $groupCount       [分组个数]
	 * @param integer $articlesPerGroup [每个分组下面的最大文章数量]
	 */
	public function FindGroupArticleList($type=1,$groupCount=4,$articlesPerGroup=10)
	{
		$groupList = M('article_group')->where('type=%d',$type)->limit($groupCount)->getField('id,name,bref');
		foreach ($groupList as $key => $group) {
			$articleList = M('article')->where('group_id=%d',$key)->order('id DESC')->limit($articlesPerGroup)->getField('id,title,bref');
			$groupList[$key]['childs'] = $articleList;
		}

		return $groupList;
	}
	
}