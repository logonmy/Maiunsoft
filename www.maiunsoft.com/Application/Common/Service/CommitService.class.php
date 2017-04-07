<?php 

namespace Common\Service;

/**
 *
 * CommitService
 */
class CommitService extends CommonService
{
	public static $objectTypes = array(
		1 => '产品评论',
		2 => '方案评论',
		3 => '文章评论',
		4 => '新闻评论',
		);

	/**
	 * 根据评论类型和评论对象查找评论
	 * 
	 * @param integer $objectType [评论类型，参照self::$objectTypes]
	 * @param integer $objectId   [评论对象编号，可能是产品、方案、文章、新闻等的编号]
	 */
	public function FindCommitList($objectType=0,$objectId=0)
	{
		if($objectType<=0||$objectId<=0) return false;

		$map['object_type'] = $objectType;
		$map['object_id'] = $objectId; 
		return M('commit')->where($map)->select();
	}

	/**
	 * 查找评论
	 * 
	 * @param integer $commitId [评论编号]
	 */
	public function FindCommit($commitId=0)
	{
		if($commitId<=0) return false;

		return M('commit')->where('id=%d',$commitId)->find();
	}

	public function SaveCommit($commit=array(),$commitId=0)
	{
		if(empty($commit)) return false;

		if($commitId<=0) return M('commit')->add($commit);

		return M('commit')->where('id=%d',$commitId)->save($commit);
	}

	public function MakeTop($commitId='')
	{
		if(empty($commitId)) return false;

		return M('commit')->where('id=%d',$commitId)->setField('top',date('Y-m-d H:i:s',time()));
	}

	/**
	 * 删除指定的评论
	 * 
	 * @param integer $commitId [评论编号]
	 */
	public function DeleteCommit($commitId=0)
	{
		if(empty($commitId)) return false;

		return M('commit')->where('id=%d',$commitId)->delete();
	}
}